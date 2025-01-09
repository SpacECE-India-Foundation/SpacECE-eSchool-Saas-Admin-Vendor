<?php $__env->startSection('title'); ?>
    <?php echo e(__('Guardian')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('manage') . ' ' . __('Guardian')); ?>

            </h3>
        </div>

        <div class="row">
            
            
            
            
            
            
            
            
            
            
            
            

            
            
            
            
            

            
            
            
            


            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            
            
            
            
            
            
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e(__('list') . ' ' . __('Guardian')); ?>

                        </h4>
                        <div class="row">
                            <div class="col-12">
                                <table aria-describedby="mydesc" class='table' id='table_list' data-toggle="table"
                                       data-url="<?php echo e(route('guardian.show',1)); ?>" data-click-to-select="true"
                                       data-side-pagination="server" data-pagination="true" data-toolbar="#toolbar"
                                       data-show-columns="true" data-show-refresh="true" data-search="true" data-trim-on-search="false" data-mobile-responsive="true" data-sort-name="id"
                                       data-sort-order="desc" data-maintain-selected="true" data-export-data-type='all' data-show-export="true"
                                       data-export-options='{ "fileName": "guardian-list-<?= date('d-m-y') ?>" ,"ignoreColumn": ["operate"]}'
                                       data-query-params="queryParams" data-escape="true">
                                    <thead>
                                    <tr>
                                        <th scope="col" data-sortable="true" data-visible="false" data-align="center" data-field="id"> <?php echo e(__('id')); ?></th>
                                        <th scope="col" data-align="center" data-field="no"> <?php echo e(__('no.')); ?> </th>
                                        <th scope="col" data-align="center" data-field="first_name"> <?php echo e(__('first_name')); ?> </th>
                                        <th scope="col" data-align="center" data-field="last_name"> <?php echo e(__('last_name')); ?> </th>
                                        <th scope="col" data-align="center" data-field="gender"> <?php echo e(__('gender')); ?> </th>
                                        <th scope="col" data-align="center" data-field="email"> <?php echo e(__('email')); ?> </th>
                                        <th scope="col" data-align="center" data-field="mobile"> <?php echo e(__('mobile')); ?> </th>
                                        <th scope="col" data-align="center" data-field="image" data-formatter="imageFormatter"> <?php echo e(__('image')); ?> </th>
                                        <th data-events="guardianEvents" scope="col" data-field="operate" data-escape="false"> <?php echo e(__('action')); ?> </th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('edit') . ' ' . __('Guardian')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <form id="edit-form" novalidate="novalidate" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="edit_id" id="edit_id">
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label><?php echo e(__('first_name')); ?> <span class="text-danger">*</span></label>
                                <?php echo Form::text('first_name', null, ['required', 'placeholder' => __('first_name'), 'class' => 'form-control', 'id' => 'first_name']); ?>

                            </div>

                            <div class="form-group col-sm-12 col-md-6">
                                <label><?php echo e(__('last_name')); ?> <span class="text-danger">*</span></label>
                                <?php echo Form::text('last_name', null, ['required', 'placeholder' => __('last_name'), 'class' => 'form-control', 'id' => 'last_name']); ?>

                            </div>

                            <div class="form-group col-sm-12 col-md-6">
                                <label><?php echo e(__('email')); ?> <span class="text-danger">*</span></label>
                                <?php echo Form::text('email', null, ['required', 'placeholder' => __('email'), 'class' => 'form-control', 'id' => 'email']); ?>

                            </div>

                            <div class="form-group col-sm-12 col-md-6">
                                <label><?php echo e(__('mobile')); ?> <span class="text-danger">*</span></label>
                                <?php echo Form::number('mobile', null, ['required', 'placeholder' => __('mobile'), 'min' => 0 ,'class' => 'form-control', 'id' => 'mobile']); ?>

                            </div>

                            <div class="form-group col-sm-12 col-md-12">
                                <label><?php echo e(__('gender')); ?> <span class="text-danger">*</span></label>
                                <div class="d-flex">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <?php echo Form::radio('gender', 'male', null, ['class' => 'form-check-input edit', 'id' => 'male']); ?>

                                            <?php echo e(__('male')); ?>

                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <?php echo Form::radio('gender', 'female', null, ['class' => 'form-check-input edit', 'id' => 'female']); ?>

                                            <?php echo e(__('female')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                <label for="image"><?php echo e(__('image')); ?> </label>
                                <input type="file" name="image" class="file-upload-default"/>
                                <div class="input-group col-xs-12">
                                    <input type="text" id="image" class="form-control file-upload-info" disabled="" placeholder="<?php echo e(__('image')); ?>"/>
                                    <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-theme" type="button"><?php echo e(__('upload')); ?></button>
                                        </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12 col-md-4">
                                <div class="d-flex">
                                    <div class="form-check w-fit-content">
                                        <label class="form-check-label ml-4">
                                            <input type="checkbox" class="form-check-input" name="reset_password" value="1"><?php echo e(__('reset_password')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                        <input class="btn btn-theme" type="submit" value=<?php echo e(__('submit')); ?>>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/guardian/index.blade.php ENDPATH**/ ?>