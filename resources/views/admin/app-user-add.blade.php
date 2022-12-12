@extends('admin.layouts.app')

<!-- Content Section -->

@section('content')

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

<div id="addresponse">
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
  @if ($message = Session::get('error'))
  <div class="alert alert-error">
    <p>{{ $message }}</p>
  </div>
  @endif
</div>

<h3 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users/</span> Add</h3>
<div class="col-xxl">
  <div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h4 class="mb-2">Add User</h4>
      <small class="text-muted float-end">MaleFashion</small>
    </div>

    <div class="card-body">
      <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Photo</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="inputGroupFile02" name="photo">
              <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Username</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon11">@</span>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11" name="username" required>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Full Name</h6>
          </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="fullname" aria-label="John Doe" required>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Email</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group input-group-merge">
              <input type="email" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" name="email" required>
              <span class="input-group-text" id="basic-default-email2">@example.com</span>
            </div>
            <div class="form-text">You can use letters, numbers &amp; periods</div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Contact</h6>
          </label>
          <div class="col-sm-10">
            <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone" name="contact" required>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Gender</h6>
          </label>
          <div class="col-sm-10">
            <select id="gender" class="form-select" name="gender" required>
              <option value="Female">Female</option>
              <option value="Male">Male</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Birth</h6>
          </label>
          <div class="col-sm-10">
            <input type="date" id="birth" class="form-control" placeholder="dd/mm/yyy" aria-label="jdoe1" name="birth" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Role</h6>
          </label>
          <div class="col-sm-10">
            <select id="user-role" class="form-select" name="role" required>
              <option value="Customer">Customer</option>
              <option value="Admin">Admin</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Password</h6>
          </label>
          <div class="col-sm-10">
            <div class="form-password-toggle">
              <label class="form-label" for="basic-default-password12">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="basic-default-password12" placeholder="············" aria-describedby="basic-default-password2" name="passwd" required>
                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name"></label>
          <div class="col-sm-10">
            <div class="form-password-toggle">
              <label class="form-label" for="basic-default-password12">Password Confirmation</label>
              <div class="input-group">
                <input type="password" class="form-control" id="basic-default-password12" placeholder="············" aria-describedby="basic-default-password2" name="passwd_confirmation" required>
                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Street</h6>
          </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="add-user-street" placeholder="street" name="street" required>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Address</h6>
          </label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-4">
                <label class="form-label">Post Code</label>
                <input type="text" class="form-control" id="add-user-city" placeholder="Post Code" name="post_code" required>
                <div class="fv-plugins-message-container invalid-feedback"></div>
              </div>
              <div class="col-sm-4">
                <label class="form-label">City</label>
                <input type="text" class="form-control" id="add-user-city" placeholder="City" name="city" required>
                <div class="fv-plugins-message-container invalid-feedback"></div>
              </div>
              <div class="col-sm-4">
                <label class="form-label">Province</label>
                <input type="text" class="form-control" id="add-user-city" placeholder="Provice" name="province" required>
                <div class="fv-plugins-message-container invalid-feedback"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-end">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Send</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

<!-- /Content Section -->

@section('scriptJS')
<script>
  window.setTimeout(function() {
    $("#addresponse .alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 4000);
</script>
@endsection