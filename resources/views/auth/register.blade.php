<x-guest-layout>
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">home</a></li>
                    <li class="item-link"><span>Register</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">
                                <x-jet-validation-errors class="mb-4" />
                                <form class="form-stl" action="{{route('register')}}" name="frm-login" method="POST">
                                    @csrf
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Create an account</h3>
                                        <h4 class="form-subtitle">Personal infomation</h4>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-lname">Name*</label>
                                        <input type="text" id="frm-reg-lname" name="name" placeholder="Your name": value="" require autofocus autocomplete="name">
                                        <span class="form-message"></span>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-email">Email Address*</label>
                                        <input type="email" id="frm-reg-email" name="email" placeholder="Email address": value="">
                                        <span class="form-message"></span>
                                    </fieldset>
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Login Information</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="frm-reg-pass">Password *</label>
                                        <input type="password" id="frm-reg-pass" name="password" placeholder="Password" require autocomplete="new-password">
                                        <span class="form-message"></span>
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half ">
                                        <label for="frm-reg-cfpass">Confirm Password *</label>
                                        <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirm Password" require autocomplete="new-password">
                                        <span class="form-message"></span>
                                    </fieldset>
                                    <input type="submit" class="btn btn-sign" value="Register" name="register">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end main products area-->
                </div>
            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
    {{-- <script src="/public/js/app.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mong muốn của chúng ta
            Validator({
                form: 'form-stl',
                formGroupSelector: '.wrap-input',
                errorSelector: '.form-message',
                rules: [ // rules chứa các hàm , hàm nằm trong main.js
                    Validator.isRequired('#frm-reg-lname', 'Vui lòng nhập tên đầy đủ của bạn'),
                    Validator.isRequired('#frm-reg-email'),
                    Validator.isEmail('#frm-reg-email'),
                    Validator.minLength('#frm-reg-pass', 6),
                    Validator.isRequired('#frm-reg-cfpass'),
                    Validator.isConfirmed('#frm-reg-cfpass', function() {
                        return document.querySelector('#form-stl #password').value;
                    }, 'Mật khẩu nhập lại không chính xác!')
                ]
            });
        });
    </script> --}}
</x-guest-layout>
