<!-- Button trigger modal -->

<div class="modal fade formModal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-xl">
        <div class="modal-content row">
            <div class="col-12 rightSide">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo e(__('registration_form')); ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="school-registration" action="<?php echo e(url('schools/registration')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="schoolFormWrapper">
                            <div class="headingWrapper">
                                <span><?php echo e(__('create_school')); ?></span>
                            </div>
                            <div class="formWrapper">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="inputWrapper">
                                            <label for="name"><?php echo e(__('name')); ?> <span class="text-danger">*</span></label>
                                            <input type="text" name="school_name" id="name" placeholder="<?php echo e(__('enter_your_school_name')); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inputWrapper">
                                            <label for="supportEmail"><?php echo e(__('email')); ?> <span class="text-danger">*</span></label>
                                            <input type="email" name="school_support_email" id="support-email"
                                                placeholder="<?php echo e(__('enter_your_school_email')); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inputWrapper">
                                            <label for="supportPhone"><?php echo e(__('mobile')); ?> <span class="text-danger">*</span></label>
                                            <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="school_support_phone" id="supportPhone"
                                                placeholder="<?php echo e(__('enter_your_school_mobile_number')); ?>" maxlength="16" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inputWrapper">
                                            <label for="address"><?php echo e(__('address')); ?> <span class="text-danger">*</span></label>
                                            <input type="text" name="school_address" id="address"
                                                placeholder="<?php echo e(__('enter_your_school_address')); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="inputWrapper">
                                            <label for="tagline"><?php echo e(__('tagline')); ?> <span class="text-danger">*</span></label>
                                            <input type="text" name="school_tagline" id="tagline" placeholder="<?php echo e(__('tagline')); ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="adminFormWrapper schoolFormWrapper">
                            <div class="headingWrapper">
                                <span><?php echo e(__('add_admin')); ?></span>
                            </div>
                            <div class="formWrapper">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="inputWrapper">
                                            <label for="FirstName"><?php echo e(__('first_name')); ?> <span class="text-danger">*</span></label>
                                            <input type="text" name="admin_first_name" id="firstName"
                                                placeholder="<?php echo e(__('enter_your_first_name')); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inputWrapper">
                                            <label for="lastName"><?php echo e(__('last_name')); ?> <span class="text-danger">*</span></label>
                                            <input type="text" name="admin_last_name" id="lastName"
                                                placeholder="<?php echo e(__('enter_your_last_name')); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inputWrapper">
                                            <label for="adminEmail"><?php echo e(__('email')); ?> <span class="text-danger">*</span></label>
                                            <input type="email" name="admin_email" id="adminEmail"
                                                placeholder="<?php echo e(__('enter_your_email')); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inputWrapper">
                                            <label for="contact"><?php echo e(__('contact')); ?> <span class="text-danger">*</span></label>
                                            <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="16" name="admin_contact" id="contact"
                                                placeholder="<?php echo e(__('enter_your_contact_number')); ?>" required>
                                        </div>
                                    </div>
                                    <?php if($trail_package): ?>
                                    <div class="col-lg-6">
                                        
                                        <div class="">
                                            <?php echo Form::checkbox('trial_package', $trail_package, false, ['class' => 'm-1']); ?>

                                            <?php echo e(__('start_trial_package')); ?>

                                        </div>
                                        
                                    </div>    
                                    <?php endif; ?>

                                    <?php if(config('services.recaptcha.key') ?? ''): ?>
                                        <div class="col-lg-12">
                                            <div class="g-recaptcha mt-4" data-sitekey=<?php echo e(config('services.recaptcha.key')); ?>></div>
                                        </div>    
                                    <?php endif; ?>
                                    
                                    
                                    <div class="col-12 modalfooter">

                                        <div class="inputWrapper">
                                            
                                        </div>
                                        <div>
                                            <input type="submit" class="commonBtn" value="<?php echo e(__('submit')); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\school-management\resources\views/registration_form.blade.php ENDPATH**/ ?>