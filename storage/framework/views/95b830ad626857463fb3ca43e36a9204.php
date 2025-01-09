<?php $__env->startSection('title'); ?>
    <?php echo e(__('upload_profile')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('Manage Students')); ?>

            </h3>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="pt-3" id="create-form" enctype="multipart/form-data" action="<?php echo e(route('students.update-profile')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row" id="toolbar">
                                        <div class="form-group col-sm-12 col-md-4">
                                            <label class="filter-menu"><?php echo e(__('Class Section')); ?> <span
                                                    class="text-danger">*</span></label>
                                            <select name="filter_class_section_id" id="filter_class_section_id"
                                                class="form-control">
                                                <option value=""><?php echo e(__('select_class_section')); ?></option>
                                                <?php $__currentLoopData = $class_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class_section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value=<?php echo e($class_section->id); ?>><?php echo e($class_section->full_name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>

                                    </div>

                                    <table aria-describedby="mydesc" class='table' id='table_list' data-toggle="table"
                                        data-url="<?php echo e(route('students.list', [1])); ?>" data-click-to-select="true"
                                        data-side-pagination="server" data-pagination="false"
                                        data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                        data-toolbar="#toolbar" data-show-columns="true" data-show-refresh="true"
                                        data-fixed-columns="false" data-fixed-number="2" data-fixed-right-number="1"
                                        data-trim-on-search="false" data-mobile-responsive="true" data-sort-name="id"
                                        data-sort-order="desc" data-maintain-selected="true"
                                        data-query-params="studentDetailsQueryParams" data-show-export="true"
                                        data-export-options='{"fileName": "section-list-<?= date('d-m-y') ?>
                                        ","ignoreColumn": ["operate"]}'
                                        data-escape="true">
                                        <thead>
                                            <tr>
                                                <th scope="col" data-field="id" data-sortable="false" data-visible="false"><?php echo e(__('id')); ?></th>
                                                <th scope="col" data-field="no"><?php echo e(__('no.')); ?></th>
                                                <th scope="col" data-field="user.image" data-formatter="imageFormatter"> <?php echo e(__('image')); ?></th>
                                                <th scope="col" data-field="user.id" data-visible="false"> <?php echo e(__('User Id')); ?></th>
                                                <th scope="col" data-field="user.full_name"><?php echo e(__('name')); ?></th>
                                                <th scope="col" data-field="roll_number"><?php echo e(__('roll_no')); ?></th>
                                                <th scope="col" data-field="user.gender" data-visible="false"> <?php echo e(__('gender')); ?></th>

                                                <th scope="col" data-field="guardian.image" data-formatter="imageFormatter"><?php echo e(__('guardian')); ?> <?php echo e(__('image')); ?></th>
                                                <th scope="col" data-field="guardian.id" data-visible="false"> <?php echo e(__('guardian_user_id')); ?> <?php echo e(__('image')); ?></th>
                                                <th scope="col" data-field="guardian.email"> <?php echo e(__('guardian') . ' ' . __('email')); ?></th>
                                                <th scope="col" data-field="guardian.full_name"> <?php echo e(__('guardian') . ' ' . __('name')); ?></th>
                                                <th scope="col" data-field="guardian.mobile"> <?php echo e(__('guardian') . ' ' . __('mobile')); ?></th>
                                                <th scope="col" data-field="guardian.gender" data-visible="false"> <?php echo e(__('guardian') . ' ' . __('gender')); ?></th>

                                                <th scope="col" data-formatter="studentImageFormatter" data-field="student.profile"><?php echo e(__('student') . ' ' . __('profile')); ?>

                                                </th>
                                                <th scope="col" data-formatter="guardianImageFormatter" data-field="guardian.profile"> <?php echo e(__('guardian') . ' ' . __('profile')); ?></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group col-sm-12 mt-3">
                                <input class="btn btn-theme submit_bulk_file float-right" type="submit" value="<?php echo e(__('submit')); ?>" name="submit"
                                    id="submit_bulk_file">
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/students/add_bulk_profile.blade.php ENDPATH**/ ?>