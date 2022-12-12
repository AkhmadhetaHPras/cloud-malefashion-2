<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Google\Cloud\Storage\StorageClient;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Users-ListAll';
        $users = User::paginate(10);

        return view('admin.app-user-list', compact('title', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'image|nullable',
            'username' => 'required|unique:users,username',
            'fullname' => 'required|max:50',
            'email' => 'required|email|unique:users,email',
            'contact' => 'required|max:15',
            'gender' => 'required|max:10',
            'birth' => 'required',
            'role' => 'required',
            'passwd' => 'required|confirmed|min:8',
            'passwd_confirmation' => 'required|min:8',
            'street' => 'required|max:100',
            'post_code' => 'required|max:10',
            'city' => 'required|max:50',
            'province' => 'required|max:50',
        ]);

        $user = new User();
        $user->role = $request->input('role');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->name = $request->input('fullname');
        $user->telp = $request->input('contact');
        $user->gender = $request->input('gender');
        $user->birth = $request->input('birth');
        
	if ($request->hasFile('photo')) {
            $googleConfigFile = file_get_contents(config_path('googlecloud.json'));
            $storage = new StorageClient([
                'keyFile' => json_decode($googleConfigFile, true)
            ]);
            $storageBucketName = config('googlecloud.storage_bucket');
            $bucket = $storage->bucket($storageBucketName);

            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/img/profile/', $filenameSimpan);
            $savepath = 'img/profile/' . $filenameSimpan;

	    $fileSource = fopen(public_path('storage/img/profile/'.$filenameSimpan), 'r');
            $googleCloudStoragePath = $savepath;
            /* Upload a file to the bucket.
               Using Predefined ACLs to manage object permissions, you may
               upload a file and give read access to anyone with the URL.*/
            $bucket->upload($fileSource, [
                 'predefinedAcl' => 'publicRead',
                 'name' => $googleCloudStoragePath
            ]);
        } else {
            // tidak ada file yang diupload
            $savepath = 'img/profile/default.png';
        }
        $user->photo = $savepath;

        $user->save();

        $address = new Address();
        $address->name = $request->input('fullname');
        $address->telp = $request->input('contact');
        $address->street_address = $request->input('street');
        $address->postal_code = $request->input('post_code');
        $address->city = $request->input('city');
        $address->province = $request->input('province');

        $address->user()->associate($user);
        $address->save();

        return redirect()->route('users-add')
            ->with('success', 'Add user successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Users-View';
        $users = User::where('id', $id)->first();

        return view('admin.app-user-view', compact('title', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
	$googleConfigFile = file_get_contents(config_path('googlecloud.json'));
        $storage = new StorageClient([
            'keyFile' => json_decode($googleConfigFile, true)
        ]);
        $storageBucketName = config('googlecloud.storage_bucket');
        $bucket = $storage->bucket($storageBucketName);
        $validator1 = Validator::make($request->all(), [
            'photo' => 'image|nullable',
            'name' => 'required|max:50',
            'telp' => 'required|max:15',
            'gender' => 'required',
            'birth' => 'required',
            'username' => 'required',
        ]);

        if ($validator1->fails()) {
            return Redirect::back()
                ->withErrors($validator1)
                ->with('error_code', 7);
        }

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->telp = $request->get('telp');
        $user->gender = $request->get('gender');
        $user->username = $request->get('username');
        $user->birth = Carbon::parse($request->get('birth'));

        if ($request->hasFile('photo')) {
            // ada file yang diupload
            if ($user->photo && $user->photo != 'img/profile/default.png' && file_exists(storage_path('app/public/' . $user->photo))) {
                Storage::delete('public/' . $user->photo);
		$object = $bucket->object($user->photo);
                $object->delete();
            }
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/img/profile/', $filenameSimpan);
            $savepath = 'img/profile/' . $filenameSimpan;
	    
	    $fileSource = fopen(public_path('storage/img/profile/'.$filenameSimpan), 'r');
            $googleCloudStoragePath = $savepath;
            /* Upload a file to the bucket.
               Using Predefined ACLs to manage object permissions, you may
               upload a file and give read access to anyone with the URL.*/
            $bucket->upload($fileSource, [
                 'predefinedAcl' => 'publicRead',
                 'name' => $googleCloudStoragePath
            ]);
        } else {
            // tidak ada file yang diupload
            $savepath = $user->photo;
        }
        $user->photo = $savepath;

        // save
        $user->save();

        return Redirect::back()
            ->with('success', "Update user successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changePasswd(Request $request, $id)
    {
        $request->validate([
            'newPassword' => 'required|confirmed|min:8',
            'newPassword_confirmation' => 'required|min:8',
        ]);

        $users = User::where('id', $id)->first();

        $users->password = Hash::make($request->input('newPassword'));
        $users->save();

        return Redirect::back()
            ->with('success', 'Update password successfully!');
    }
}
