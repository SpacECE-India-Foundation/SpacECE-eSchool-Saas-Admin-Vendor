<?php $__env->startSection('title'); ?>
    <?php echo e(__('send_mail_to_schools')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('send_mail_to_schools')); ?>

            </h3>
        </div>
        <div class="row grid-margin">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form id="formdata" class="create-form" action="<?php echo e(url('schools/send-mail')); ?>" novalidate="novalidate">
                            <?php echo csrf_field(); ?>
                            <div class="pt-3 row">

                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="assign_schools"><?php echo e(__('subject')); ?><span class="text-danger">*</span></label>
                                    <?php echo Form::text('subject', null, ['class' => 'form-control', 'required']); ?>

                                </div>

                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="assign_schools"><?php echo e(__('schools')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::select('school_id[]', $schools, null, ['class' => 'form-control select2-dropdown select2-hidden-accessible','multiple','required']); ?>

                                </div>

                                <div class="form-group col-sm-12 col-md-12">
                                    <label for=""><?php echo e(__('description')); ?> <span class="text-danger">*</span></label>
                                    <textarea id="tinymce_message" name="description" id="data" required placeholder="<?php echo e(__('description')); ?>"></textarea>
                                </div>
                                
                                <div class="form-group col-sm-12 col-md-12">
                                    <a data-value="{school_name}" class="btn btn-gradient-light btn_tag mt-2">{ <?php echo e(__('school_name')); ?> }</a>
                                    <a data-value="{school_admin_name}" class="btn btn-gradient-light btn_tag mt-2">{ <?php echo e(__('school_admin_name')); ?> }</a>
                                    <a data-value="{school_email}" class="btn btn-gradient-light btn_tag mt-2">{ <?php echo e(__('school_email')); ?> }</a>
                                    <a data-value="{school_admin_email}" class="btn btn-gradient-light btn_tag mt-2">{ <?php echo e(__('school_admin_email')); ?> }</a>
                                    <a data-value="{school_admin_mobile}" class="btn btn-gradient-light btn_tag mt-2">{ <?php echo e(__('school_admin_mobile')); ?> }</a>
                                    <a data-value="{code}" class="btn btn-gradient-light btn_tag mt-2">{ <?php echo e(__('code')); ?> }</a>
                                </div>

                                
                                <div class="form-group col-sm-12 col-md-12">
                                    <a data-value="{system_name}" class="btn btn-gradient-light btn_tag mt-2">{ <?php echo e(__('system_name')); ?> }</a>
                                    <a data-value="{support_email}" class="btn btn-gradient-light btn_tag mt-2">{ <?php echo e(__('support_email')); ?> }</a>
                                    <a data-value="{support_contact}" class="btn btn-gradient-light btn_tag mt-2">{ <?php echo e(__('support_contact')); ?> }</a>
                                    <a data-value="{website}" class="btn btn-gradient-light btn_tag mt-2">{ <?php echo e(__('website')); ?> }</a>
                                </div>
                            </div>
                            
                            <input class="btn btn-theme float-right ml-3" id="create-btn" type="submit" value=<?php echo e(__('submit')); ?>>
                            <input class="btn btn-secondary float-right" type="reset" value=<?php echo e(__('reset')); ?>>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/settings/custom_email.blade.php ENDPATH**/ ?>