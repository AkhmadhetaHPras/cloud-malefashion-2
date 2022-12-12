@extends('layouts.app')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Profile</h4>
                    <div class="breadcrumb__links">
                        <a href="/">Home</a>
                        <span>Profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="profile">
    <div class="container py-5">
        <div id="profileresponse">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-3 mb-3">
                <img id="pdimage" src="{{asset('storage/'.$profile->photo)}}" alt="" />
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile__detail">
                            <p style="font-size: 32px;">
                                <b id="pdname">{{ $profile->name }}</b>
                                <span><i class="fa {{$profile->gender == 'Male'? 'fa-male' : 'fa-female'}} ml-5" id="pdgender"></i></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile__detail">
                            <p class="text-dark">
                                <span id="pdemail">{{ $profile->email }}</span> | <span class="text-secondary" id="pdtelp">{{ $profile->telp }}</span>
                            </p>
                            <p><span id="pdbirth" style="font-size: 20px;">{{ $profile->birth }}</span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile__detail">
                            <p>
                                <span id="pdaddress">{{ $profile->address->first()->street_address }}</span>,
                                <span id="pdcity">{{ $profile->address->first()->city }}</span>,
                                <span id="pdprovince">{{ $profile->address->first()->province }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="button" class="site-btn-outline" data-toggle="modal" data-target="#addaddress">New Address</button>
                        <button type="button" class="site-btn ml-2" data-toggle="modal" data-target="#editprofile">Edit Profile</button>
                        <button type="button" class="site-btn" data-toggle="modal" data-target="#editcredentials">Edit Credentials</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="addressmessage">

        </div>
        <!-- address table -->
        <div class="row mt-3">
            <div class="col">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Streat Address</th>
                            <th scope="col">Postal Code</th>
                            <th scope="col">City</th>
                            <th scope="col">Province</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbodyaddress">
                        @foreach($profile->address as $p)
                        <tr>
                            <th scope="row">{{ $p->name }}</th>
                            <td>{{ $p->telp }}</td>
                            <td>{{ $p->street_address }}</td>
                            <td>{{ $p->postal_code }}</td>
                            <td>{{ $p->city }}</td>
                            <td>{{ $p->province }}</td>
                            <td><i class="fa fa-trash" onclick="deleteaddress({{ $p->id }});"></i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</section>

<!-- modal new address -->
<div class="modal fade" id="addaddress" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <div class="checkout__input">
                        <p>Name<span>*</span></p>
                        <input type="text" id="aaname" class="checkout__input__add" autofocus required />
                    </div>
                    <div class="checkout__input">
                        <p>Telp<span>*</span></p>
                        <input type="text" id="aatelp" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>Street Address<span>*</span></p>
                        <input type="text" id="aaaddress" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>Postal Code<span>*</span></p>
                        <input type="text" id="aapostalcode" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>City<span>*</span></p>
                        <input type="text" id="aacity" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>Province<span>*</span></p>
                        <input type="text" id="aaprovince" required value="" />
                    </div>
                    <div id="aaresponse">
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" class="site-btn" id="aasubmitbtn" value="Submit" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal edit profile -->
<div class="modal fade" id="editprofile" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('profile.update', $profile->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <img id="epimage" src="{{asset('storage/'.$profile->photo)}}" alt="" width="60px" />
                    <input type="file" id="epphoto" name="photo" class="checkout__input__addm mb-4" />
                    <div class="checkout__input">
                        <p>Name<span>*</span></p>
                        <input type="text" id="epname" name="name" class="checkout__input__add" autofocus required value="{{ $profile->name }}" />
                    </div>
                    <div class="checkout__input">
                        <p>Gender<span>*</span></p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input epgender" type="radio" name="gender" id="epgendermale" value="Male" {{ $profile->gender === 'Male' ? 'checked' : '' }} />
                        <label class="form-check-label" for="epgendermale">
                            Male
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input epgender" type="radio" name="gender" id="epgenderfemale" value="Female" {{ $profile->gender === 'Female' ? 'checked' : '' }} />
                        <label class="form-check-label" for="epgenderfemale">
                            Female
                        </label>
                    </div>
                    <div class="checkout__input">
                        <p>Telp<span>*</span></p>
                        <input type="text" id="eptelp" name="telp" required value="{{ $profile->telp }}" />
                    </div>
                    <div class="checkout__input">
                        <p>Birth<span>*</span></p>
                        <input type="date" id="epbirth" name="birth" required value="{{ $profile->birth }}" />
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" class="site-btn" id="epsubmitbtn" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal edit credentials -->
<div class="modal fade" id="editcredentials" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Credentials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <div id="ecresponse">
                    </div>
                    <div class="checkout__input">
                        <p>Email<span>*</span></p>
                        <input type="email" id="ecemail" class="checkout__input__add" autofocus required value="{{ $profile->email }}" />
                    </div>
                    <div class="checkout__input">
                        <p>Username<span>*</span></p>
                        <input type="text" id="ecusername" class="checkout__input__add" required value="{{ $profile->username }}" />
                    </div>
                    <div class="checkout__input">
                        <p>Current Password<span>*</span></p>
                        <input type="password" id="ecpassword" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>New Password<span>*</span></p>
                        <input type="password" id="ecnewpassword" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>Password Confirmation<span>*</span></p>
                        <input type="password" id="ecnewpasswordconfirmation" required value="" />
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" class="site-btn" id="ecsubmitbtn" value="Submit" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // first step
    $(document).ready(function() {

        fetchprofile();

        window.setTimeout(function() {
            $("#profileresponse .alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 4000);

    });

    // fecth data profile
    function fetchprofile() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "get",
            url: "/profile-fetch",
            dataType: "json",
            success: function(response) {
                $('#pdname').text(response.profile.name);
                if (response.profile.gender === 'Male') {
                    $('#pdgender').addClass('fa-male');
                } else {
                    $('#pdgender').addClass('fa-female');
                }
                $('#pdemail').text(response.profile.email);
                $('#pdtelp').text(response.profile.telp);
                $('#pdbirth').text(response.profile.birth);
                $('#pdaddress').text(response.profile.address[0].street_address);
                $('#pdcity').text(response.profile.address[0].city);
                $('#pdprovince').text(response.profile.address[0].province);

                $('#tbodyaddress').html("");
                $.each(response.profile.address, function(key, item) {
                    $('#tbodyaddress').append(
                        "<tr>" +
                        "<th scope='row'>" + item.name + "</th>" +
                        "<td>" + item.telp + "</td>" +
                        "<td>" + item.street_address + "</td>" +
                        "<td>" + item.postal_code + "</td>" +
                        "<td>" + item.city + "</td>" +
                        "<td>" + item.province + "</td>" +
                        "<td><i class='fa fa-trash' onclick='deleteaddress(" + item.id + ")'></i></td>" +
                        "<tr>"
                    );
                });

            }
        });
    }

    // add address
    $(document).on('click', '#aasubmitbtn', function(e) {
        e.preventDefault();

        var data = {
            'name': $('#aaname').val(),
            'telp': $('#aatelp').val(),
            'street_address': $('#aaaddress').val(),
            'postal_code': $('#aapostalcode').val(),
            'city': $('#aacity').val(),
            'province': $('#aaprovince').val(),
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "post",
            url: "/address",
            data: data,
            dataType: "json",
            success: function(response) {
                if (response.status == 400) {
                    // gagal
                    $('#aaresponse').html("");
                    $('#aaresponse').html("<div class='alert alert-danger' role='alert'></div>");
                    $.each(response.errors, function(key, err_value) {
                        $('.alert-danger').append('<li>' + err_value + '</li>');
                    });

                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                            $(this).remove();
                        });
                    }, 10000);

                } else {
                    // berhasil
                    $('#addressmessage').html("");
                    $('#addressmessage').html("<div class='alert alert-success' role='alert'></div>");
                    $('.alert').text(response.message);
                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                    $('#addaddress').modal('hide');

                    fetchprofile();
                }
            }
        });

    });

    // delete address
    function deleteaddress(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "delete",
            url: "/address/" + id,
            data: id,
            dataType: "json",
            success: function(response) {
                if (response.status == 404) {
                    // gagal
                    $('#addressmessage').html("");
                    $('#addressmessage').html("<div class='alert alert-danger' role='alert'></div>");
                    $('.alert').text(response.message);

                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                            $(this).remove();
                        });
                    }, 5000);

                } else {
                    // berhasil
                    $('#addressmessage').html("");
                    $('#addressmessage').html("<div class='alert alert-success' role='alert'></div>");
                    $('.alert').text(response.message);
                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                            $(this).remove();
                        });
                    }, 5000);

                    fetchprofile();
                }
            }
        });
    }

    // edit credentials
    $(document).on('click', '#ecsubmitbtn', function(e) {
        e.preventDefault();

        var data = {
            'email': $('#ecemail').val(),
            'username': $('#ecusername').val(),
            'currentpassword': $('#ecpassword').val(),
            'newpassword': $('#ecnewpassword').val(),
            'newpassword_confirmation': $('#ecnewpasswordconfirmation').val(),
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "put",
            url: "/profile-credentials/" + "{{Auth()->user()->id}}",
            data: data,
            dataType: "json",
            success: function(response) {
                if (response.status == 400) {
                    // gagal
                    $('#ecresponse').html("");
                    $('#ecresponse').html("<div class='alert alert-danger' role='alert'></div>");
                    $.each(response.errors, function(key, err_value) {
                        $('.alert-danger').append('<li>' + err_value + '</li>');
                    });

                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                            $(this).remove();
                        });
                    }, 10000);
                    $('#ecpassword').val("");
                    $('#ecnewpassword').val("");
                    $('#ecnewpasswordconfirmation').val("");

                } else {
                    // berhasil
                    $('#profileresponse').html("");
                    $('#profileresponse').html("<div class='alert alert-success' role='alert'></div>");
                    $('.alert').text(response.message);
                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                    $('#editcredentials').modal('hide');

                    fetchprofile();
                }
            }
        });

    });
</script>

@if(!empty(Session::get('error_code')) && Session::get('error_code') == 6)
@section('script')
<script>
    $(function() {
        $('#editprofile').modal('show');
    });
</script>
@endsection
@endif
@endsection
