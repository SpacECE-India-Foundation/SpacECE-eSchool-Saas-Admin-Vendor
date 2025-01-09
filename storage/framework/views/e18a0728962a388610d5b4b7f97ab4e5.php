<?php $__env->startSection('title'); ?>
    <?php echo e(__('manage').' '.__('role')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('manage').' '.__('role')); ?>

            </h3>
        </div>
        <div class="row grid-margin">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-sm btn-theme" href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('back')); ?></a>
                        </div>
                        <?php echo Form::model($role, ['method' => 'PATCH', 'class' => 'edit-form-without-reset', 'route' => ['roles.update', $role->id]]); ?>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label><strong> <?php echo e(__('name')); ?>:</strong></label>
                                    <?php echo Form::text('name', null, ['placeholder' => __('name'), 'class' => 'form-control',$role->name=="Teacher"?"readonly":""]); ?>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="row">
                                    <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group col-lg-3 col-sm-12 col-xs-12 col-md-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <?php echo e(Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions), ['class' => 'name form-check-input'])); ?>

                                                    <?php echo e($value->name); ?>

                                                </label>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input class="btn btn-theme float-right ml-3" id="create-btn" type="submit" value=<?php echo e(__('submit')); ?>>
                                <input class="btn btn-secondary float-right" type="reset" value=<?php echo e(__('reset')); ?>>
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/roles/edit.blade.php ENDPATH**/ ?>