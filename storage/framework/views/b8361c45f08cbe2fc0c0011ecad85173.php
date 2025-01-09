<?php $__env->startSection('title'); ?>
    <?php echo e(__('Semester')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e(__('create').' '.__('Semester')); ?>

                        </h4>
                        <form action="<?php echo e(route('semester.store')); ?>" class="create-form pt-3 " id="formdata" method="POST" novalidate="novalidate" data-success-function="formSuccessFunction">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="form-group col-sm-12 col-md-4">
                                    <label><?php echo e(__('name')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::text('name', null, ['required', 'placeholder' => __('name'), 'class' => 'form-control']); ?>

                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="start_month"><?php echo e(__('Start Month')); ?> <span class="text-danger">*</span></label>
                                    <select name="start_month" id="start_month" class="form-control" required>
                                        <option value="1"><?php echo e(__("January")); ?></option>
                                        <option value="2"><?php echo e(__("February")); ?></option>
                                        <option value="3"><?php echo e(__("March")); ?></option>
                                        <option value="4"><?php echo e(__("April")); ?></option>
                                        <option value="5"><?php echo e(__("May")); ?></option>
                                        <option value="6"><?php echo e(__("June")); ?></option>
                                        <option value="7"><?php echo e(__("July")); ?></option>
                                        <option value="8"><?php echo e(__("August")); ?></option>
                                        <option value="9"><?php echo e(__("September")); ?></option>
                                        <option value="10"><?php echo e(__("October")); ?></option>
                                        <option value="11"><?php echo e(__("November")); ?></option>
                                        <option value="12"><?php echo e(__("December")); ?></option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="end_month"><?php echo e(__('End Month')); ?> <span class="text-danger">*</span></label>
                                    <select name="end_month" id="end_month" class="form-control" required>
                                        <option value="1"><?php echo e(__("January")); ?></option>
                                        <option value="2"><?php echo e(__("February")); ?></option>
                                        <option value="3"><?php echo e(__("March")); ?></option>
                                        <option value="4"><?php echo e(__("April")); ?></option>
                                        <option value="5"><?php echo e(__("May")); ?></option>
                                        <option value="6"><?php echo e(__("June")); ?></option>
                                        <option value="7"><?php echo e(__("July")); ?></option>
                                        <option value="8"><?php echo e(__("August")); ?></option>
                                        <option value="9"><?php echo e(__("September")); ?></option>
                                        <option value="10"><?php echo e(__("October")); ?></option>
                                        <option value="11"><?php echo e(__("November")); ?></option>
                                        <option value="12"><?php echo e(__("December")); ?></option>
                                    </select>
                                </div>
                            </div>
                             <input class="btn btn-theme float-right ml-3" id="create-btn" type="submit" value=<?php echo e(__('submit')); ?>>
                            <input class="btn btn-secondary float-right" type="reset" value=<?php echo e(__('reset')); ?>>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e(__('list').' '.__('Semester')); ?>

                        </h4>
                        <div class="col-12 mt-4 text-right">
                            <b><a href="#" class="table-list-type active mr-2" data-id="0"><?php echo e(__('all')); ?></a></b> | <a href="#" class="ml-2 table-list-type" data-id="1"><?php echo e(__("Trashed")); ?></a>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <table aria-describedby="mydesc" class='table' id='table_list'
                                       data-toggle="table" data-url="<?php echo e(route('semester.show',1)); ?>" data-click-to-select="true"
                                       data-side-pagination="server" data-pagination="true"
                                       data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-toolbar="#toolbar"
                                       data-show-columns="true" data-show-refresh="true" data-fixed-columns="false"
                                       data-fixed-number="2" data-fixed-right-number="1" data-trim-on-search="false"
                                       data-mobile-responsive="true" data-sort-name="id" data-sort-order="asc"
                                       data-maintain-selected="true" data-export-data-type='all' data-show-export="true"
                                       data-export-options='{ "fileName": "semester-list-<?= date('d-m-y') ?>","ignoreColumn": ["operate"]}'
                                       data-query-params="queryParams" data-escape="true">
                                    <thead>
                                    <tr>
                                        <th scope="col" data-field="id" data-sortable="true" data-visible="false"><?php echo e(__('id')); ?></th>
                                        <th scope="col" data-field="no"><?php echo e(__('no.')); ?></th>
                                        <th scope="col" data-field="name"><?php echo e(__('name')); ?></th>
                                        <th scope="col" data-field="start_month_name"><?php echo e(__('Start Month')); ?></th>
                                        <th scope="col" data-field="end_month_name"><?php echo e(__('End Month')); ?></th>
                                        <th scope="col" data-field="current" data-formatter="yesAndNoStatusFormatter"><?php echo e(__('Current')); ?></th>
                                        <th data-events="semesterEvents" scope="col" data-field="operate" data-escape="false"><?php echo e(__('action')); ?></th>
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

    <div class="modal fade" id="editModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <?php echo e(__('edit').' '.__('Semester')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>

                <form action="<?php echo e(url('semester')); ?>" class="edit-form pt-3 " id="formdata" method="POST" novalidate="novalidate">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-12 col-sm-12 col-md-4">
                                <label><?php echo e(__('name')); ?> <span class="text-danger">*</span></label>
                                <?php echo Form::text('name', null, ['required', 'placeholder' => __('name'), 'class' => 'form-control', 'id' => 'edit-name']); ?>

                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="edit-start-month"><?php echo e(__('Start Month')); ?> <span class="text-danger">*</span></label>
                                <select name="start_month" id="edit-start-month" class="form-control">
                                    <option value="1"><?php echo e(__("January")); ?></option>
                                    <option value="2"><?php echo e(__("February")); ?></option>
                                    <option value="3"><?php echo e(__("March")); ?></option>
                                    <option value="4"><?php echo e(__("April")); ?></option>
                                    <option value="5"><?php echo e(__("May")); ?></option>
                                    <option value="6"><?php echo e(__("June")); ?></option>
                                    <option value="7"><?php echo e(__("July")); ?></option>
                                    <option value="8"><?php echo e(__("August")); ?></option>
                                    <option value="9"><?php echo e(__("September")); ?></option>
                                    <option value="10"><?php echo e(__("October")); ?></option>
                                    <option value="11"><?php echo e(__("November")); ?></option>
                                    <option value="12"><?php echo e(__("December")); ?></option>
                                </select>
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="edit-end-month"><?php echo e(__('Start Month')); ?> <span class="text-danger">*</span></label>
                                <select name="end_month" id="edit-end-month" class="form-control">
                                    <option value="1"><?php echo e(__("January")); ?></option>
                                    <option value="2"><?php echo e(__("February")); ?></option>
                                    <option value="3"><?php echo e(__("March")); ?></option>
                                    <option value="4"><?php echo e(__("April")); ?></option>
                                    <option value="5"><?php echo e(__("May")); ?></option>
                                    <option value="6"><?php echo e(__("June")); ?></option>
                                    <option value="7"><?php echo e(__("July")); ?></option>
                                    <option value="8"><?php echo e(__("August")); ?></option>
                                    <option value="9"><?php echo e(__("September")); ?></option>
                                    <option value="10"><?php echo e(__("October")); ?></option>
                                    <option value="11"><?php echo e(__("November")); ?></option>
                                    <option value="12"><?php echo e(__("December")); ?></option>
                                </select>
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
<?php $__env->startSection('script'); ?>
    <script>
        function formSuccessFunction() {
            $('[data-repeater-item]').slice(2).remove();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/semester/index.blade.php ENDPATH**/ ?>