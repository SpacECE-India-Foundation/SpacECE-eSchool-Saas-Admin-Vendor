<?php $__env->startSection('title'); ?>
    <?php echo e(__('reset_password')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('reset_password')); ?>

            </h3>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card search-container">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <table aria-describedby="mydesc" class='table' id='table_list' data-toggle="table"
                                       data-url="<?php echo e(route('student.reset-password.show')); ?>" data-click-to-select="true"
                                       data-side-pagination="server" data-pagination="true"
                                       data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-toolbar="#toolbar"
                                       data-show-columns="true" data-show-refresh="true" data-fixed-columns="false"
                                       data-fixed-number="1" data-trim-on-search="false"
                                       data-mobile-responsive="true" data-sort-name="id" data-sort-order="desc"
                                       data-maintain-selected="true" data-export-data-type='all' data-show-export="true"
                                       data-export-options='{ "fileName": "reset-password-list-<?= date('d-m-y') ?> ","ignoreColumn": ["operate"]}' data-query-params="queryParams"
                                       data-escape="true">
                                    <thead>
                                    <tr>
                                        <th scope="col" data-field="id" data-sortable="true" data-visible="false"><?php echo e(__('id')); ?></th>
                                        <th scope="col" data-field="no"><?php echo e(__('no.')); ?></th>
                                        <th scope="col" data-field="full_name"><?php echo e(__('name')); ?></th>
                                        <th scope="col" data-field="email"><?php echo e(__('admission_no')); ?></th>
                                        <th scope="col" data-field="operate" data-escape="false"><?php echo e(__('action')); ?>

                                        </th>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/students/reset-password.blade.php ENDPATH**/ ?>