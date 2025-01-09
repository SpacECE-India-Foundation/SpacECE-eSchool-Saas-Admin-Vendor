<!DOCTYPE html>
<html lang="en">
    <?php
    $lang = Session::get('language');
?>
<?php if($lang): ?>
    <?php if($lang->is_rtl): ?>
        <html lang="en" dir="rtl">
    <?php else: ?>
        <html lang="en" dir="ltl">
    <?php endif; ?>
<?php else: ?>
    <html lang="en" dir="ltl">
<?php endif; ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="<?php echo e(asset('assets/home_page/css/style.css')); ?>" rel="stylesheet">

    <title><?php echo e(__('login')); ?> || <?php echo e(config('app.name')); ?></title>

    <?php echo $__env->make('layouts.include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        :root {
        --primary-color: <?php echo e($systemSettings['theme_primary_color'] ?? '#56cc99'); ?>;
        --secondary-color: <?php echo e($systemSettings['theme_secondary_color'] ?? '#215679'); ?>;
        --secondary-color1: <?php echo e($systemSettings['theme_secondary_color_1'] ?? '#38a3a5'); ?>;
        --primary-background-color: <?php echo e($systemSettings['theme_primary_background_color'] ?? '#f2f5f7'); ?>;
        --text--secondary-color: <?php echo e($systemSettings['theme_text_secondary_color'] ?? '#5c788c'); ?>;
        
    }
    .modal .modal-dialog {
        margin-top: unset !important;
    }
    a {
        color: #F8A800 !important;
    }
    </style>

</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper login-d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-xl-6 mx-auto">
                        <?php if(env('DEMO_MODE')): ?>
                        <div class="alert alert-info text-center" role="alert">
                            NOTE : <a target="_blank" href="https://eschool-saas.wrteam.me/login">-- Click Here --</a> if you cannot login.
                        </div>
                        <?php endif; ?>
                        <div class="auth-form-light rounded-lg text-left p-5">
                            <div class="brand-logo text-center">
                                <?php if($schoolSettings['horizontal_logo'] ?? ''): ?>
                                    <img class="img-fluid w-25" src="<?php echo e($schoolSettings['horizontal_logo'] ?? ''); ?>" alt="logo">    
                                <?php elseif($systemSettings['login_page_logo'] ?? $systemSettings['horizontal_logo'] ?? ''): ?>
                                    <img class="img-fluid w-25" src="<?php echo e($systemSettings['login_page_logo'] ?? $systemSettings['horizontal_logo'] ?? ''); ?>" alt="logo">
                                <?php else: ?>
                                    <img class="img-fluid w-25" src="<?php echo e(url('assets/horizontal-logo2.png')); ?>" alt="logo">
                                <?php endif; ?>

                            </div>
                            <div class="mt-3">
                                
                                <?php if(\Session::has('emailSuccess')): ?>
                                    <div class="alert alert-success text-center" role="alert">
                                        <?php echo e(\Session::get('emailSuccess')); ?>.
                                    </div>
                                <?php endif; ?>
                                <?php if(\Session::has('success')): ?>
                                    <div class="alert alert-success text-center" role="alert">
                                        <?php echo e(\Session::get('success')); ?>.
                                    </div>
                                    <div class="alert alert-success text-center mt-2" role="alert">
                                        Please ensure you use your registered email for login, and your contact number as the password.
                                    </div>
                                <?php endif; ?>
                                
                                <?php if(\Session::has('emailError')): ?>
                                    <div class="alert alert-danger text-center" role="alert">
                                        <?php echo e(\Session::get('emailError')); ?>.
                                    </div>
                                <?php endif; ?>
                                <?php if(\Session::has('error')): ?>
                                    <div class="alert alert-danger text-center" role="alert">
                                        <?php echo e(\Session::get('error')); ?>.
                                    </div>
                                <?php endif; ?>
                            </div>
                            <form action="<?php echo e(route('login')); ?>" id="frmLogin" method="POST" class="pt-3">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="email"><?php echo e(__('email')); ?></label>
                                    <input id="email" type="text" class="form-control rounded-lg form-control-lg"
                                        name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email"
                                        autofocus placeholder="<?php echo e(__('email_or_mobile')); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password"><?php echo e(__('password')); ?></label>
                                    <div class="input-group">
                                        <input id="password" type="password"
                                            class="form-control rounded-lg form-control-lg" name="password" required
                                            autocomplete="current-password" placeholder="<?php echo e(__('password')); ?>">
                                        <div class="input-group-append" cursor="pointer" id="togglePasswordShowHide">
                                            <span class="input-group-text">
                                                <i class="fa fa-eye-slash" id="togglePassword"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <?php if($school ?? ''): ?>
                                    <div class="form-group d-none">
                                        <label for="school_code"><?php echo e(__('school_code')); ?></label>
                                        <input id="school_code" type="text" class="form-control rounded-lg form-control-lg"
                                            name="code" value="<?php echo e($school->code); ?>" autocomplete="school_code"
                                            autofocus placeholder="<?php echo e(__('school_code')); ?>">
                                    </div>
                                <?php else: ?>
                                    <div class="form-group">
                                        <label for="school_code"><?php echo e(__('school_code')); ?></label>
                                        <input id="school_code" type="text" class="form-control rounded-lg form-control-lg"
                                            name="code" value="<?php echo e(old('school_code')); ?>" autocomplete="school_code"
                                            autofocus placeholder="<?php echo e(__('school_code')); ?>">
                                    </div>
                                <?php endif; ?>
                                

                                <?php if(Route::has('password.request')): ?>
                                    <div class="my-2 d-flex justify-content-end align-items-center">
                                        <a class="auth-link text-blue" href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('forgot_password')); ?>

                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="mt-3">
                                    <input type="submit" name="btnlogin" id="login_btn" value="<?php echo e(__('login')); ?>"
                                        class="btn btn-block btn-theme btn-lg font-weight-medium auth-form-btn rounded-lg" />
                                </div>
                                <div class="my-2 d-flex justify-content-end align-items-center">
                                    <a class="text-blue" href="#" data-bs-toggle="modal" data-bs-dismiss="offcanvas" data-bs-target="#staticBackdrop">
                                        <?php echo e(__('New user Sign up to manage your school activities seamlessly')); ?>

                                    </a>
                                </div>
                            </form>
                            <?php echo $__env->make('registration_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php if(env('DEMO_MODE')): ?>

                            <div class="row mt-3">
                                <hr class="w-100">
                                <div class="col-12 text-center mb-4 text-black-50">Demo Credentials</div>
                            </div>
                            <?php if(empty($school) ?? ''): ?>
                                <div class="col-12 text-center">
                                    Super Admin Panels
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <button class="btn w-100 btn-success mt-2" id="superadmin_btn">Super Admin</button>
                                    </div>

                                    <div class="col-md-6">
                                        <button class="btn w-100 btn-info mt-2" id="superadmin_staff_btn">Staff</button>
                                    </div>
                                </div>
                            <?php endif; ?>
                                
                                <div class="col-12 text-center mt-3">
                                    <hr class="w-100">
                                    School Admin Panels
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <button class="btn w-100 btn-info mt-2" id="schooladmin_btn">School Admin</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn w-100 btn-danger mt-2" id="teacher_btn">Teacher</button>
                                    </div>

                                    <div class="col-md-4">
                                        <button class="btn w-100 btn-primary mt-2" id="schooladmin_staff_btn">Staff</button>
                                    </div>
                                </div>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <script src="<?php echo e(asset('/assets/js/vendor.bundle.base.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/jquery-toast-plugin/jquery.toast.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/custom/common.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/sweetalert2.all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/custom/function.js')); ?>"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script type='text/javascript'>
        $("#frmLogin").validate({
            rules: {
                username: "required",
                password: "required",
            },
            success: function(label, element) {
                $(element).parent().removeClass('has-danger')
                $(element).removeClass('form-control-danger')
            },
            errorPlacement: function(label, element) {
                if (label.text()) {
                    if ($(element).attr("name") == "password") {
                        label.insertAfter(element.parent()).addClass('text-danger mt-2');
                    } else {
                        label.addClass('mt-2 text-danger');
                        label.insertAfter(element);
                    }
                }
            },
            highlight: function(element, errorClass) {
                $(element).parent().addClass('has-danger')
                $(element).addClass('form-control-danger')
            }
        });

        const togglePassword = document.querySelector("#togglePasswordShowHide");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            // this.classList.toggle("fa-eye");
            if (password.getAttribute("type") === 'password') {
                $('#togglePassword').addClass('fa-eye-slash');
                $('#togglePassword').removeClass('fa-eye');
            } else {
                $('#togglePassword').removeClass('fa-eye-slash');
                $('#togglePassword').addClass('fa-eye');
            }
        });

        <?php if(env('DEMO_MODE')): ?>
        // Super admin panel
            $('#superadmin_btn').on('click', function(e) {
                $('#email').val('superadmin@gmail.com');
                $('#password').val('superadmin');
                $('#login_btn').attr('disabled', true);
                $(this).attr('disabled', true);
                $('#frmLogin').submit();
            })

            $('#superadmin_staff_btn').on('click', function(e) {
                $('#email').val('mahesh@gmail.com');
                $('#password').val('staff@123');
                $('#login_btn').attr('disabled', true);
                $(this).attr('disabled', true);
                $('#frmLogin').submit();
            })

            // School Panel
        $('#schooladmin_btn').on('click', function (e) {
            $('#email').val('school1@gmail.com');
            $('#password').val('school@123');
            $('#school_code').val('SCH202412');
            $('#login_btn').attr('disabled', true);
            $(this).attr('disabled', true);
            $('#frmLogin').submit();
        })
            $('#teacher_btn').on('click', function(e) {
                $('#email').val('teacher@gmail.com');
                $('#password').val('0111111111');
                $('#school_code').val('SCH202412');
                $('#login_btn').attr('disabled', true);
                $(this).attr('disabled', true);
                $('#frmLogin').submit();
            })

            $('#schooladmin_staff_btn').on('click', function(e) {
                $('#email').val('smitc@gmail.com');
                $('#password').val('965555885');
                $('#school_code').val('SCH202412');
                $('#login_btn').attr('disabled', true);
                $(this).attr('disabled', true);
                $('#frmLogin').submit();
            })
        <?php endif; ?>
    </script>
</body>

<?php if(Session::has('error')): ?>
    <script type='text/javascript'>
        $.toast({
            text: '<?php echo e(Session::get('error')); ?>',
            showHideTransition: 'slide',
            icon: 'error',
            loaderBg: '#f2a654',
            position: 'top-right'
        });
    </script>
<?php endif; ?>

<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script type='text/javascript'>
            $.toast({
                text: '<?php echo e($error); ?>',
                showHideTransition: 'slide',
                icon: 'error',
                loaderBg: '#f2a654',
                position: 'top-right'
            });
        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

</html>
<?php /**PATH C:\xampp\htdocs\school-management\resources\views/auth/login.blade.php ENDPATH**/ ?>