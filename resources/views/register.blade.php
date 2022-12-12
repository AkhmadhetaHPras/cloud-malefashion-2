@extends('layouts.guest')

@section('content')
<div class="container-fluid p-5" style="background-color: #f3f2ee">
    <div class="checkout__form">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-12">
                <div id="signupresponse">

                </div>
                <h6 class="checkout__title">Biodata</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout__input">
                            <p>Name<span>*</span></p>
                            <input type="text" id="rname" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout__input">
                            <p>Birth<span>*</span></p>
                            <input type="date" id="rbirth" />
                        </div>
                    </div>
                </div>
                <div class="checkout__input">
                    <p>Gender<span>*</span></p>
                </div>
                <div class="form-check">
                    <input class="form-check-input rgender" type="radio" name="gender" id="rmale" value="Male" checked />
                    <label class="form-check-label" for="rmale">
                        Male
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input rgender" type="radio" name="gender" id="rfemale" value="Female" />
                    <label class="form-check-label" for="rfemale">
                        Female
                    </label>
                </div>
                <h6 class="checkout__title mt-3">Credentials</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout__input">
                            <p>Telp<span>*</span></p>
                            <input type="text" id="rtelp" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout__input">
                            <p>Email<span>*</span></p>
                            <input type="email" id="remail" />
                        </div>
                    </div>
                </div>
                <div class="checkout__input">
                    <p>Username<span>*</span></p>
                    <input type="text" class="checkout__input__add" id="rusername" />
                </div>
                <div class="checkout__input">
                    <p>Password<span>*</span></p>
                    <input type="password" id="rpassword" />
                </div>
                <div class="checkout__input">
                    <p>Password Confirmation<span>*</span></p>
                    <input type="password" id="rpassword_confirmation" />
                </div>
                <h6 class="checkout__title mt-5">Address</h6>
                <div class="checkout__input">
                    <p>Street Address<span>*</span></p>
                    <input type="text" class="checkout__input__add" id="raddress" />
                </div>
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="checkout__input">
                            <p>Postal Code<span>*</span></p>
                            <input type="text" id="rpostal_code" />
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="checkout__input">
                            <p>City<span>*</span></p>
                            <input type="text" id="rcity" />
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="checkout__input">
                            <p>Province<span>*</span></p>
                            <input type="text" id="rprovince" />
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-end">
                    <div class="col-6 d-flex justify-content-end">
                        <input type="submit" class="site-btn" id="signupbtn" value="Sign Up" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {

        $(document).on('click', '#signupbtn', function(e) {
            e.preventDefault();

            var data = {
                // biodata
                'name': $('#rname').val(),
                'birth': $('#rbirth').val(),
                'gender': $('.rgender:checked').val(),
                // credentials
                'telp': $('#rtelp').val(),
                'email': $('#remail').val(),
                'username': $('#rusername').val(),
                'password': $('#rpassword').val(),
                'password_confirmation': $('#rpassword_confirmation').val(),
                // address
                'address': $('#raddress').val(),
                'postal_code': $('#rpostal_code').val(),
                'city': $('#rcity').val(),
                'province': $('#rprovince').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/signup",
                data: data,
                dataType: "json",
                success: function(response) {
                    if (response.status == 400) {
                        // gagal
                        $('#signupresponse').html("");
                        $('#signupresponse').html("<div class='alert alert-danger' role='alert'></div>");
                        $.each(response.errors, function(key, err_value) {
                            $('.alert-danger').append('<li>' + err_value + '</li>');
                        });
                        // scroll to top
                        $('html, body').animate({
                            scrollTop: 0
                        }, 'slow');

                        window.setTimeout(function() {
                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                $(this).remove();
                            });
                        }, 10000);

                        $('#rpassword').val("");
                        $('#rpassword_confirmation').val("");

                    } else {
                        // berhasil
                        $('#signupresponse').html("");
                        $('#signupresponse').html("<div class='alert alert-success' role='alert'></div>");
                        $('.alert').text(response.message);
                        $('html, body').animate({
                            scrollTop: 0
                        }, 'fast');
                        window.setTimeout(function() {
                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                $(this).remove();
                            });
                        }, 6000);

                        window.location = '/';
                    }
                }
            });

        });
    });
</script>
@endsection