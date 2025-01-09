<?php $__env->startSection('title'); ?>
    <?php echo e(__('assign_roll_no')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .btn-outline-success {
            padding: 15px;
        }
    </style>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('manage_students_roll_no')); ?>

            </h3>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e(__('list') . ' ' . __('students')); ?>

                        </h4>
                        <div id="toolbar">
                            <div class="row">
                                <div class="form-group col-sm-12 col-md-3">
                                    <label class="filter-menu" for="filter_roll_number_class_section_id"><?php echo e(__('Class Section')); ?> </label>
                                    <select name="filter_roll_number_class_section_id" id="filter_roll_number_class_section_id" class="form-control">
                                        <?php $__currentLoopData = $class_section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value=<?php echo e($class->id); ?>>
                                                <?php echo e($class->full_name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group col-sm-12 col-md-3">
                                    <label class="filter-menu" for="sort_by"><?php echo e(__('sort_by')); ?> </label>
                                    <select name="sort_by" id="sort_by" class="form-control">
                                        <option value="first_name"><?php echo e(__('first_name')); ?></option>
                                        <option value="last_name"><?php echo e(__('last_name')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-12 col-md-3">
                                    <label class="filter-menu" for="order_by"><?php echo e(__('Order By')); ?> </label>
                                    <select name="order_by" id="order_by" class="form-control">
                                        <option value="asc" selected><?php echo e(__('Ascending')); ?></option>
                                        <option value="desc"><?php echo e(__('Descending')); ?></option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <form id="assign-roll-no-form" action="<?php echo e(route('students.roll-number.update')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row search-container">
                                <div class="col-12">
                                    <table aria-describedby="mydesc" class='table' id='table_list' data-toggle="table" data-url="<?php echo e(route('students.roll-number.show',1)); ?>" data-click-to-select="true" data-search="true" data-toolbar="#toolbar" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-mobile-responsive="true" data-maintain-selected="true" data-show-export="true" data-export-data-type='all' data-export-options='{ "fileName": "<?php echo e(__('students')); ?> <?php echo e(__('roll_no')); ?>-<?= date('d-m-y') ?>","ignoreColumn": ["operate"]}' data-query-params="studentRollNumberQueryParams">
                                        <thead>
                                        <tr>
                                            <th scope="col" data-field="no"><?php echo e(__('no.')); ?></th>
                                            <th scope="col" data-field="student_id" data-visible="false"><?php echo e(__('student_id')); ?> </th>
                                            <th scope="col" data-field="user_id" data-visible="false"><?php echo e(__('User Id')); ?></th>
                                            <th scope="col" data-field="new_roll_number"><?php echo e(__('new_roll_no')); ?></th>
                                            <th scope="col" data-field="old_roll_number"><?php echo e(__('old_roll_no')); ?></th>
                                            <th scope="col" data-field="first_name"><?php echo e(__('first_name')); ?></th>
                                            <th scope="col" data-field="last_name"><?php echo e(__('last_name')); ?></th>
                                            <th scope="col" data-field="dob"><?php echo e(__('dob')); ?></th>
                                            <th scope="col" data-field="image" data-formatter="imageFormatter"><?php echo e(__('image')); ?></th>
                                            <th scope="col" data-field="class_section_id" data-visible="false"><?php echo e(__('Class') . ' ' . __('section') . ' ' . __('id')); ?></th>
                                            <th scope="col" data-field="admission_no"><?php echo e(__('admission_no')); ?></th>
                                            <th scope="col" data-field="admission_date"><?php echo e(__('admission_date')); ?></th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="text-left">
                                <input class="btn btn-theme btn_generate_roll_number my-4 float-right" id="create-btn" type="submit" value=<?php echo e(__('submit')); ?>>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/students/assign_roll_no.blade.php ENDPATH**/ ?>