<?php $__env->startSection('title'); ?>
    <?php echo e(__('Class Section')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('manage') . ' ' . __('Class Section & Teachers')); ?>

            </h3>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e(__('list') . ' ' . __('Class')); ?>

                        </h4>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['class-section-edit','class-section-delete'])): ?>
                            <div class="d-block">

                                <div class="">
                                    <div class="col-12 text-right d-flex justify-content-end text-right align-items-end">
                                        <b><a href="#" class="table-list-type active mr-2" data-id="0"><?php echo e(__('all')); ?></a></b> | <a href="#" class="ml-2 table-list-type" data-id="1"><?php echo e(__("Trashed")); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div id="toolbar">
                            <label for="filter_class_id" class="filter-menu"><?php echo e(__("Class")); ?></label>
                            <select name="class_id" id="filter_class_id" class="form-control">
                                <option value=""><?php echo e(__('all')); ?></option>
                                <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($class->id); ?>"><?php echo e($class->full_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <table aria-describedby="mydesc" class='table' id='table_list' data-toggle="table"
                               data-url="<?php echo e(route('class-section.show',[1])); ?>" data-click-to-select="true" data-side-pagination="server"
                               data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                               data-show-columns="true" data-show-refresh="true" data-fixed-columns="false"
                               data-fixed-number="2" data-fixed-right-number="1" data-trim-on-search="false"
                               data-mobile-responsive="true" data-sort-name="id" data-toolbar="#toolbar" data-sort-order="desc"
                               data-maintain-selected="true" data-export-data-type='all'
                               data-export-options='{ "fileName": "class-section-list-<?= date('d-m-y') ?>" ,"ignoreColumn":["operate"]}'
                               data-show-export="true"
                               data-detail-filter="subjectTeachersDetailFilter" data-detail-view="true" data-detail-formatter="SubjectTeachersDetailFormatter"
                               data-query-params="classQueryParams" data-escape="true">
                            <thead>
                            <tr>
                                <th scope="col" data-field="id" data-sortable="true" data-visible="false"><?php echo e(__('id')); ?></th>
                                <th scope="col" data-field="no"><?php echo e(__('no.')); ?></th>
                                <th scope="col" data-field="full_name"><?php echo e(__('Class')); ?></th>
                                <th scope="col" data-field="class_teachers_list" data-formatter="classTeacherListFormatter"><?php echo e(__('Class Teacher')); ?></th>
                                <th scope="col" data-field="subject_teachers_list" data-formatter="subjectTeacherListFormatter"><?php echo e(__('Subject Teacher')); ?></th>
                                <th scope="col" data-field="created_at" data-formatter="dateTimeFormatter" data-sortable="true" data-visible="false"><?php echo e(__('created_at')); ?></th>
                                <th scope="col" data-field="updated_at" data-formatter="dateTimeFormatter" data-sortable="true" data-visible="false"><?php echo e(__('updated_at')); ?></th>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['class-section-edit','class-section-delete'])): ?>
                                    <th scope="col" data-field="operate" data-escape="false"><?php echo e(__('action')); ?></th>
                                <?php endif; ?>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/class-section/index.blade.php ENDPATH**/ ?>