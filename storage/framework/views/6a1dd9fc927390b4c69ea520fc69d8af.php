<?php $__env->startSection('title'); ?>
    <?php echo e(__('Transfer & Promote Students')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('Transfer & Promote Students')); ?>

            </h3>
        </div>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transfer-student-create')): ?>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card search-container">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo e(__('Transfer Student In Next Section')); ?>

                            </h4>
                            <form action="<?php echo e(route('transfer-student.store')); ?>" data-success-function="formSuccessFunction" class="create-form mt-6 pt-3" id="formdata">
                                <?php echo csrf_field(); ?>
                                <div class="row" id="toolbar1">
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label><?php echo e(__('Current Class Section')); ?> <span class="text-danger">*</span></label>
                                        <select required name="current_class_section_id" id="transfer_class_section" class="form-control select2" style="width:100%;" tabindex="-1" aria-hidden="true">
                                            <option value=""><?php echo e(__('Select Class')); ?></option>
                                            <?php $__currentLoopData = $classSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($classSection->id); ?>" data-class="<?php echo e($classSection->class_id); ?>" data-section="<?php echo e($classSection->section_id); ?>">
                                                    <?php echo e($classSection->full_name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label><?php echo e(__('Transfer Class Section')); ?> <span class="text-danger">*</span></label>
                                        <select required name="new_class_section_id" id="new_transfer_class_section" class="form-control select2" style="width:100%;" tabindex="-1" aria-hidden="true">
                                            <option value=""><?php echo e(__('Select Class')); ?></option>
                                            <option value="data-not-found">-- <?php echo e(__('no_data_found')); ?> --</option>
                                            <?php $__currentLoopData = $classSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($classSection->id); ?>" data-class="<?php echo e($classSection->class_id); ?>" data-section="<?php echo e($classSection->section_id); ?>">
                                                    <?php echo e($classSection->full_name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>


                                <table aria-describedby="mydesc" class='table1 transfer_student_table' id='transfer-student-table-list'
                                       data-toggle="table" data-url="<?php echo e(route('transfer-student.show',[1])); ?>"
                                       data-side-pagination="server" data-pagination="true"
                                       data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-toolbar="#toolbar"
                                       data-show-columns="true" data-show-refresh="true" data-fixed-columns="false"
                                       data-fixed-number="2" data-fixed-right-number="1" data-trim-on-search="false"
                                       data-mobile-responsive="true" data-sort-name="id" data-sort-order="desc" data-response-handler="responseHandler"
                                       data-maintain-selected="true" data-export-data-type='all' data-click-to-select="true"
                                       data-export-options='{ "fileName": "transfer-student-list-<?= date('d-m-y') ?>" ,"ignoreColumn": ["operate"]}'
                                       data-query-params="transferStudentQueryParams" data-escape="true">
                                    <thead>
                                    <tr>
                                        <th data-field="transfer" data-checkbox="true"></th>
                                        <th scope="col" data-field="student_id" data-sortable="true" data-visible="false"><?php echo e(__('id')); ?></th>
                                        <th scope="col" data-field="user_id" data-sortable="true" data-visible="false"><?php echo e(__('User Id')); ?></th>
                                        <th scope="col" data-field="no"><?php echo e(__('no.')); ?></th>
                                        <th scope="col" data-field="name"><?php echo e(__('name')); ?></th>
                                    </tr>
                                    </thead>
                                </table>
                                <textarea id="student_ids" name="student_ids" style="display: none"></textarea>
                                <input type="hidden" name="student_id" id="transfer-student-id">
                                <input class="btn btn-theme btn-transfer float-right" id="create-btn" type="submit" value=<?php echo e(__('submit')); ?>>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('promote-student-create')): ?>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card search-container">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo e(__('Promote Student In Next Session')); ?>

                            </h4>
                            <form action="<?php echo e(route('promote-student.store')); ?>" data-success-function="formSuccessFunction" class="create-form mt-6 pt-3" id="formdata">
                                <?php echo csrf_field(); ?>
                                <div class="row" id="toolbar2">
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label><?php echo e(__('Class Section')); ?> <span class="text-danger">*</span></label>
                                        <select required name="class_section_id" id="student_class_section" class="form-control select2" style="width:100%;" tabindex="-1" aria-hidden="true">
                                            <option value=""><?php echo e(__('Select Class')); ?></option>
                                            <?php $__currentLoopData = $classSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($section->id); ?>" data-class="<?php echo e($section->class->id); ?>">
                                                    <?php echo e($section->full_name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label><?php echo e(__('Promote In')); ?> <span class="text-danger">*</span></label>
                                        <select required name="session_year_id" id="session_year_id" class="form-control select2" style="width:100%;" tabindex="-1" aria-hidden="true">
                                            <option value=""><?php echo e(__('Select Session Years')); ?></option>
                                            <?php $__currentLoopData = $sessionYears; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $years): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($years->id); ?>">
                                                    <?php echo e($years->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label><?php echo e(__('Promote Class')); ?> <span class="text-danger">*</span></label>
                                        <select required name="new_class_section_id" id="new_student_class_section" class="form-control select2" style="width:100%;" tabindex="-1" aria-hidden="true">
                                            <option value=""><?php echo e(__('Select Class')); ?></option>
                                            <?php $__currentLoopData = $classSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($section->id); ?>" data-class="<?php echo e($section->class->id); ?>">
                                                    <?php echo e($section->full_name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>


                                <table aria-describedby="mydesc" class='table promote_student_table' id='promote_student_table_list'
                                       data-toggle="table" data-url="<?php echo e(route('promote-student.show',[1])); ?>"
                                       data-click-to-select="true" data-side-pagination="server" data-pagination="false"
                                       data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-toolbar="#toolbar"
                                       data-show-columns="true" data-show-refresh="true" data-fixed-columns="false"
                                       data-fixed-number="2" data-fixed-right-number="1" data-trim-on-search="false"
                                       data-mobile-responsive="true" data-sort-name="id" data-sort-order="desc"
                                       data-maintain-selected="true" data-export-data-type='all' data-show-export="true"
                                       data-export-options='{ "fileName": "promote-student-list-<?= date('d-m-y') ?>" ,"ignoreColumn": ["operate"]}'
                                       data-query-params="promoteStudentQueryParams" data-escape="true">
                                    <thead>
                                    <tr>
                                        <th scope="col" data-field="id" data-sortable="true" data-visible="false"><?php echo e(__('id')); ?></th>
                                        <th scope="col" data-field="no"><?php echo e(__('no.')); ?></th>
                                        <th scope="col" data-field="student_id" data-visible="false"><?php echo e(__('Student Id')); ?></th>
                                        <th scope="col" data-field="user.full_name"><?php echo e(__('name')); ?></th>
                                        <th scope="col" data-field="result" data-formatter="promoteStudentResultFormatter"><?php echo e(__('result')); ?></th>
                                        <th scope="col" data-field="status" data-formatter="promoteStudentStatusFormatter"><?php echo e(__('status')); ?></th>
                                    </tr>
                                    </thead>
                                </table>
                                <input class="btn btn-theme btn_promote mt-3 float-right" id="create-btn" type="submit" value=<?php echo e(__('submit')); ?>>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>

        $('#transfer_class_section').on('change', function () {

            // Refresh the bootstrap table
            $('#transfer-student-table-list').bootstrapTable('refresh');

            // Get Class and section value from the option selected
            let classId = $(this).find('option[value="' + $(this).val() + '"]').data("class");
            let sectionId = $(this).find('option[value="' + $(this).val() + '"]').data("section");

            // remove Disabled Attribute from the value having empty and hide all the options
            $('#new_transfer_class_section').val("").removeAttr('disabled').show();
            $("#new_transfer_class_section").find('option').hide();

            // Check the options whose classId is equal to option's data class value and sectionId value should not be equal to option's data section
            let matchingOptions = $("#new_transfer_class_section").find('option').filter(function () {
                return $(this).data("class") == classId && $(this).data("section") != sectionId;
            });

            // If Matching options Found then show options and get Selected First Option
            if (matchingOptions.length) {
                matchingOptions.show().first().prop('selected', true);
            } else {
                // or else show data not found option and make it disable
                $("#new_transfer_class_section").val("data-not-found").attr('disabled', true).show();
            }

            // Trigger Change event
            $("#new_transfer_class_section").trigger('change');
        });


        $('#student_class_section').on('change', function () {
            $('#promote_student_table_list').bootstrapTable('refresh');
        });


        $('.btn_promote').hide();
        $('.btn-transfer').hide()

        function set_data() {
            $(document).ready(function () {
                student_class = $('#student_class_section').val();
                session_year = $('#session_year_id').val();
                promote_class = $('#new_student_class_section').val();

                if (student_class != '' && session_year != '' && promote_class != '') {
                    $('.btn_promote').show();
                } else {
                    $('.btn_promote').hide();
                }
            });
        }

        $('#student_class_section,#session_year_id,#new_student_class_section').on('change', function () {
            set_data();
        });

        function formSuccessFunction(response) {
            $('#promote_student_table_list').bootstrapTable('refresh');
            $('#transfer-student-table-list').bootstrapTable('refresh');
            $('.btn_promote').hide();
            $('.btn-transfer').hide();
        }

        // Check Events on Transfer Student List Table
        $('#transfer-student-table-list').bootstrapTable({
            onCheck: function (row) {
                updateStudentIdsHidden("#transfer-student-table-list", '#transfer-student-id', '.btn-transfer');
            },
            onUncheck: function (row) {
                updateStudentIdsHidden("#transfer-student-table-list", '#transfer-student-id', '.btn-transfer');
            },
            onCheckAll: function (rows) {
                updateStudentIdsHidden("#transfer-student-table-list", '#transfer-student-id', '.btn-transfer');
            },
            onUncheckAll: function (rows) {
                updateStudentIdsHidden("#transfer-student-table-list", '#transfer-student-id', '.btn-transfer');
            }
        });


        // Maintain selected on server side
        var $transfer_table = $('#transfer-student-table-list')
        var selections = []

        function responseHandler(res) {
            $.each(res.rows, function (i, row) {
                row.transfer = $.inArray(row.student_id, selections) !== -1
            })
            return res
        }

        $(function () {
            $transfer_table.on('check.bs.table check-all.bs.table uncheck.bs.table uncheck-all.bs.table',
                function (e, rowsAfter, rowsBefore) {
                    var rows = rowsAfter
                    student_id = [];
                    if (e.type === 'uncheck-all') {
                        rows = rowsBefore
                    }

                    var ids = $.map(!$.isArray(rows) ? [rows] : rows, function (row) {
                        return row.student_id
                    })

                    var func = $.inArray(e.type, ['check', 'check-all']) > -1 ? 'union' : 'difference'
                    selections = window._[func](selections, ids)
                    selections.forEach(element => {
                        student_id.push(element);
                    });
                    $('textarea#student_ids').val(student_id);
                })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/promote_student/index.blade.php ENDPATH**/ ?>