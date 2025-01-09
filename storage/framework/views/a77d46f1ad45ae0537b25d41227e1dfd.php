<?php $__env->startSection('title'); ?>
    <?php echo e(__('teacher')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e(__('Teacher Bulk Upload')); ?>

                        </h4>
                        <form class="pt-3 create-staff-form" id="create-form" action="<?php echo e(route('teachers.store-bulk-upload')); ?>" method="POST" novalidate="novalidate">
                            <div class="row">
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="file-upload-default"><?php echo e(__('file_upload')); ?> <span class="text-danger">*</span></label>
                                    <input type="file" name="file" class="file-upload-default" />
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" id="file-upload-default" disabled="" placeholder="<?php echo e(__('file_upload')); ?>" required="required" />
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-theme" type="button"><?php echo e(__('upload')); ?></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-theme" id="create-btn" type="submit" value=<?php echo e(__('submit')); ?>>
                        </form>
                        <hr>
                        <div class="row form-group col-sm-12 col-md-2 mt-5">
                            <a class="btn btn-theme form-control" href="<?php echo e(route('teachers.bulk-data-sample')); ?>" download>
                                <strong><?php echo e(__('download_dummy_file')); ?></strong>
                            </a>
                        </div>
                        <div class="row col-sm-12 col-xs-12">
                            <span style="font-size: 14px">
                                <b><?php echo e(__('note')); ?> :- </b><?php echo e(__('First download dummy file and convert to .csv file then upload it')); ?>.</span>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>        
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/teacher/bulk_upload.blade.php ENDPATH**/ ?>