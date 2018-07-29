<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>
        Rising Street Infra City PVT. LTD. Login Page
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });

    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="dashboard/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="dashboard/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="dashboard/demo/default/media/img/logo/favicon.ico" />

    <!-- custom styles -->
    <style>
        .m-login__contanier {
            width: 1024px !important;
        }

    </style>
</head>
<!-- end::Head -->
<!-- end::Body -->

<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-login m-login--signin  m-login--5" id="m_login" style="background-image: url(dashboard/app/media/img//bg/bg-3.jpg);">
            <div class="m-login__wrapper-2 m-portlet-full-height">
                <div class="m-login__contanier">

                    <div class="m-login__signup d-block">
                        <div class="m-login__head">
                            <h3 class="m-login__title">
                                Sign Up
                            </h3>
                            <div class="m-login__desc">
                                Enter your details to create your account:
                            </div>
                        </div>
                        <form method="post" action="/register" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">

                            {{ csrf_field() }}

                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <div class="col-lg-6">
                                        <label>Pin Type:*
                                        </label>
                                        <select name="pin_type" class="form-control m-input m-input--square">
                                            @foreach($pin_types as $pin_type)
                                            <option value="{{ $pin_type->id }}">{{ $pin_type->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="m-form__help">
                                            Select your Pin type
                                        </span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="">
                                            Pin Number:*
                                        </label>
                                        <input name="pin_no" type="number" class="form-control m-input" placeholder="Enter Pin Code">
                                        <span class="m-form__help">
                                            Please enter your pin number
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <div class="col-lg-4">
                                        <label>
                                            Sponser ID:*
                                        </label>
                                        <input name="sponsor_id" type="text" class="form-control m-input" placeholder="Sponsor ID">
                                        <span class="m-form__help">
                                            Select your sponsor id
                                        </span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>
                                            Parent ID:*
                                        </label>
                                        <input name="parent_id" type="text" class="form-control m-input" placeholder="Sponsor ID">
                                        <span class="m-form__help">
                                            Select your parent id
                                        </span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="">
                                            Position:*
                                        </label>
                                        <select name="position" class="form-control m-input m-input--square">
                                            <option value="Left">Left</option>
                                            <option value="Right">Right</option>
                                        </select>

                                        <span class="m-form__help">
                                            Select your leg position
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <div class="col-lg-4">
                                        <label>
                                            Full Name:
                                        </label>
                                        <input name="name" type="text" class="form-control m-input" placeholder="Enter full name">
                                        <span class="m-form__help">
                                            Please enter your full name
                                        </span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>
                                            User Name:
                                        </label>
                                        <input name="username" type="text" class="form-control m-input" placeholder="Enter user name">
                                        <span class="m-form__help">
                                            Please enter user name ( no spaces allowed )
                                        </span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="">
                                            Contact Number:
                                        </label>
                                        <input name="contact" type="text" class="form-control m-input" placeholder="Enter contact number">
                                        <span class="m-form__help">
                                            Please enter your contact number
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">
                                    <div class="col-lg-6">
                                        <label>
                                            Email:*
                                        </label>
                                        <input name="email" type="email" class="form-control m-input" placeholder="Email ID">
                                        <span class="m-form__help">
                                            Enter your email id
                                        </span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="">
                                            Date of birth:*
                                        </label>
                                        <input name="dob" type="date" class="form-control m-input" placeholder="Date of Birth">
                                        <span class="m-form__help">
                                            Select your Date Of Birth
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">
                                    <div class="col-lg-6">
                                        <label>
                                            Gender:*
                                        </label>
                                        <select name="gender" class="form-control m-input m-input--square">
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                        <span class="m-form__help">
                                            Select your gender
                                        </span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="">
                                            Marital Status:*
                                        </label>
                                        <select name="marital_status" class="form-control m-input m-input--square">
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widow">Widow</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>

                                        <span class="m-form__help">
                                            State your marital status
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">
                                    <div class="col-lg-12">
                                        <label>
                                            Address:
                                        </label>
                                        <div class="m-input-icon m-input-icon--right">
                                            <input name="address" type="text" class="form-control m-input" placeholder="Enter your address">
                                            <span class="m-input-icon__icon m-input-icon__icon--right">
                                                <span>
                                                    <i class="la la-map-marker"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="m-form__help">
                                            Please enter your address
                                        </span>
                                    </div>

                                </div>

                                <div class="form-group m-form__group row">
                                    <div class="col-lg-6">
                                        <label class="">
                                            State:*
                                        </label>
                                        <select name="state" class="form-control m-input m-input--square">
                                            <option value="1">State A</option>
                                            <option value="2">State B</option>
                                            <option value="2">State C</option>
                                            <option value="2">State D</option>
                                        </select>

                                        <span class="m-form__help">
                                            Select your State
                                        </span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            City:*
                                        </label>
                                        <input name="city" type="text" class="form-control m-input" placeholder="City">
                                        <span class="m-form__help">
                                            State your City
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">

                                    <div class="col-lg-6">
                                        <label>
                                            Password:*
                                        </label>
                                        <input type="password" name="password" class="form-control m-input" placeholder="Password">
                                        <span class="m-form__help">
                                            Enter your password
                                        </span>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>
                                            Password Confirmation:*
                                        </label>
                                        <input type="password" name="password_confirmation" class="form-control m-input" placeholder="Password confirmation">
                                        <span class="m-form__help">
                                            Confirm password
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                        <button type="reset" class="btn btn-secondary">
                                            Reset
                                        </button>
                                    </div>
                                </div>

                        </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end:: Page -->
            <!--begin::Base Scripts -->
            <script src="dashboard/vendors/base/vendors.bundle.js" type="text/javascript"></script>
            <script src="dashboard/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
            <!--end::Base Scripts -->
            <!--begin::Page Snippets -->
            {{--
            <script src="user/snippets/custom/pages/user/login.js" type="text/javascript"></script> --}}
            <!--end::Page Snippets -->
</body>
<!-- end::Body -->

</html>
