<?php $__env->startSection('title'); ?>
    <?php echo e(__('staff')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('Manage Staff')); ?>

            </h3>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e(__('Create Staff')); ?>

                        </h4>
                        <form class="pt-3 create-staff-form" id="create-form" action="<?php echo e(route('staff.store')); ?>" method="POST" novalidate="novalidate">
                            <div class="row">
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="role_id"><?php echo e(__('role')); ?> <span class="text-danger">*</span></label>
                                    <select name="role_id" id="role_id" class="form-control" required>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="first_name"><?php echo e(__('first_name')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" name="first_name" id="first_name" placeholder="<?php echo e(__('first_name')); ?>" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="last_name"><?php echo e(__('last_name')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" name="last_name" id="last_name" placeholder="<?php echo e(__('last_name')); ?>" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="mobile"><?php echo e(__('mobile')); ?> <span class="text-danger">*</span></label>
                                    <input type="number" name="mobile" id="mobile" min="0" placeholder="<?php echo e(__('contact')); ?>" class="form-control remove-number-increment" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="email"><?php echo e(__('email')); ?> <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email" placeholder="<?php echo e(__('email')); ?>" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label><?php echo e(__('image')); ?> <span class="text-info text-small">(308px*338px)</span></label>
                                    <input type="file" name="image" class="file-upload-default"/>
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="<?php echo e(__('image')); ?>" required/>
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-theme" type="button"><?php echo e(__('upload')); ?></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label><?php echo e(__('dob')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::text('dob', null, ['required', 'placeholder' => __('dob'), 'class' => 'datepicker-popup-no-future form-control','autocomplete'=>'off']); ?>

                                    <span class="input-group-addon input-group-append">
                                    </span>
                                </div>
                                <?php if(Auth::user()->school_id): ?>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="salary"><?php echo e(__('Salary')); ?> <span class="text-danger">*</span></label>
                                        <input type="number" name="salary" id="salary" placeholder="<?php echo e(__('Salary')); ?>" class="form-control" min="0" value="0" required>
                                    </div>
                                <?php endif; ?>


                                <?php if(!Auth::user()->school_id): ?>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="assign_schools"><?php echo e(__('assign')); ?> <?php echo e(__('schools')); ?></label>
                                        <?php echo Form::select('school_id[]', $schools, null, ['class' => 'form-control select2-dropdown select2-hidden-accessible','multiple']); ?>

                                    </div>
                                <?php endif; ?>

                                <?php if(\App\Services\FeaturesService::hasFeature('Staff Management')): ?>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="joining_date"><?php echo e(__('joining_date')); ?></label>
                                    <?php echo Form::text('joining_date', null, ['placeholder' => __('joining_date'), 'class' => 'datepicker-popup form-control','autocomplete'=>'off']); ?>

                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label><?php echo e(__('status')); ?> <span class="text-danger">*</span></label><br>
                                    <div class="d-flex">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <?php echo Form::radio('status', 1); ?>

                                                <?php echo e(__('Active')); ?>

                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <?php echo Form::radio('status', 0,true); ?>

                                                <?php echo e(__('Inactive')); ?>

                                            </label>
                                        </div>
                                    </div>
                                    <?php if(!empty(Auth::user()->school_id)): ?>
                                        <span class="text-danger small"><?php echo e(__('Note').' :- '.__('Activating this will consider in your current subscription cycle')); ?></span>
                                    <?php endif; ?>
                                </div>                                
                                <?php endif; ?>
                                <div class="form-group col-sm-12 col-md-12">

                                </div>
                                <?php if(\App\Services\FeaturesService::hasFeature('Expense Management')): ?>
                                
                                <div class="form-group col-sm-12 col-md-6">
                                    <h4 class="mb-3"><?php echo e(__('allowances')); ?></h4>

                                    <div class="form-group col-sm-12 allowance-div">
                                        <div data-repeater-list="allowance_data">
                                            <div class="row allowance_type_div" id="allowance_type_div" data-repeater-item>
                                                <div class="form-group col-xl-4">
                                                    <label><?php echo e(__('allowance_type')); ?> </label>
                                                    <select id="allowance_id" name="allowance[0][id]" class="form-control allowance_id">
                                                        <option value="">--<?php echo e(__('select')); ?>--</option>
                                                        <?php $__currentLoopData = $allowances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allowance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($allowance->id); ?>" data-value="<?php echo e((isset($allowance->amount)) ? $allowance->amount : $allowance->percentage); ?>" data-type="<?php echo e((isset($allowance->amount)) ? 'amount' : 'percentage'); ?>"><?php echo e($allowance->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-4" id="amount_allowance_div" style="display: none">
                                                    <label><?php echo e(__('amount')); ?> <span class="text-danger">*</span></label>
                                                    <input type="text" id="allowance_amount" name="allowance[0][amount]" class="allowance_amount form-control" placeholder="<?php echo e(__('amount')); ?>" required>
                                                </div>
                                                
                                                <div class="form-group col-xl-4" id="percentage_allowance_div" style="display: none">
                                                    <label><?php echo e(__('percentage')); ?> <span class="text-danger">*</span></label>
                                                    <input type="text" id="allowance_percentage" name="allowance[0][percentage]" class="allowance_percentage form-control" placeholder="<?php echo e(__('percentage')); ?>" required>
                                                </div>

                                                <div class="form-group col-xl-1 mt-4">
                                                    <button type="button" class="btn btn-inverse-danger btn-icon remove-allowance-div" data-repeater-delete>
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div> 
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group col-sm-12 mt-4">
                                        <button type="button" class="btn btn-inverse-success add-allowance-div"
                                                data-repeater-create>
                                            <i class="fa fa-plus"></i> <?php echo e(__('add_new_allowances')); ?>

                                        </button>
                                    </div>
                                </div>
                                


                                
                                <div class="form-group col-sm-12 col-md-6">
                                    <h4 class="mb-3"><?php echo e(__('deductions')); ?></h4>

                                    <div class="form-group col-sm-12 deduction-div">
                                        <div data-repeater-list="deduction_data">
                                            <div class="row deduction_type_div" id="deduction_type_div" data-repeater-item>
                                                <div class="form-group col-xl-4">
                                                    <label><?php echo e(__('deduction_type')); ?> </label>
                                                    <select id="deduction_id" name="deduction[0][id]" class="form-control deduction_id">
                                                        <option value="">--<?php echo e(__('select')); ?>--</option>
                                                        <?php $__currentLoopData = $deductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deduction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($deduction->id); ?>" data-value="<?php echo e((isset($deduction->amount)) ? $deduction->amount : $deduction->percentage); ?>" data-type="<?php echo e((isset($deduction->amount)) ? 'amount' : 'percentage'); ?>"><?php echo e($deduction->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-4" id="amount_deduction_div" style="display: none">
                                                    <label><?php echo e(__('amount')); ?> <span class="text-danger">*</span></label>
                                                    <input type="text" id="deduction_amount" name="deduction[0][amount]" class="deduction_amount form-control" placeholder="<?php echo e(__('amount')); ?>" required>
                                                </div>
                                                
                                                <div class="form-group col-xl-4" id="percentage_deduction_div" style="display: none">
                                                    <label><?php echo e(__('percentage')); ?> <span class="text-danger">*</span></label>
                                                    <input type="text" id="deduction_percentage" name="deduction[0][percentage]" class="deduction_percentage form-control" placeholder="<?php echo e(__('percentage')); ?>" required>
                                                </div>

                                                <div class="form-group col-xl-1 mt-4">
                                                    <button type="button" class="btn btn-inverse-danger btn-icon remove-deduction-div" data-repeater-delete>
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div> 
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group col-sm-12 mt-4">
                                        <button type="button" class="btn btn-inverse-success add-deduction-div"
                                                data-repeater-create>
                                            <i class="fa fa-plus"></i> <?php echo e(__('add_new_deduction')); ?>

                                        </button>
                                    </div>
                                </div>

                                
                               <?php endif; ?>
                               
                            </div>
                            <input class="btn btn-theme float-right ml-3" id="create-btn" type="submit" value=<?php echo e(__('submit')); ?>>
                                <input class="btn btn-secondary float-right" type="reset" value=<?php echo e(__('reset')); ?>>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo e(__('Staff List')); ?></h4>
                        <div class="row" id="toolbar">
                            <div class="form-group col-sm-12 col-md-3">
                                <button id="update-status" class="btn btn-secondary" disabled><span class="update-status-btn-name"><?php echo e(__('Inactive')); ?></span></button>
                            </div>
                        </div>
                        <div class="col-12 mt-4 text-right">
                            <b><a href="#" class="table-list-type active mr-2" data-id="0"><?php echo e(__('Active')); ?></a></b> | <a href="#" class="ml-2 table-list-type" data-id="1"><?php echo e(__("Inactive")); ?></a>
                        </div>

                        <table aria-describedby="mydesc" class='table' id='table_list' data-toggle="table"
                               data-url="<?php echo e(route('staff.show',[1])); ?>" data-click-to-select="true"
                               data-side-pagination="server" data-pagination="true"
                               data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true"
                               data-show-refresh="true" data-fixed-columns="false" data-fixed-number="2"
                               data-fixed-right-number="1" data-trim-on-search="false" data-mobile-responsive="true"
                               data-sort-name="id" data-sort-order="desc" data-maintain-selected="true"
                               data-export-data-type='all' data-query-params="activeDeactiveQueryParams"
                               data-export-options='{ "fileName": "staff-list-<?= date('d-m-y') ?>" ,"ignoreColumn":["operate"]}' data-show-export="true"
                               data-toolbar="#toolbar" data-escape="true">
                            <thead>
                            <tr>
                                <th data-field="state" data-checkbox="true"></th>
                                <th scope="col" data-field="id" data-sortable="true" data-visible="false"><?php echo e(__('id')); ?></th>
                                <th scope="col" data-field="no"><?php echo e(__('no.')); ?></th>
                                <th scope="col" data-field="image" data-formatter="imageFormatter"><?php echo e(__('image')); ?></th>
                                <th scope="col" data-field="full_name" data-sortable="true"><?php echo e(__('name')); ?></th>
                                <th scope="col" data-field="roles_name" data-sortable="false"><?php echo e(__('role')); ?></th>
                                <th scope="col" data-field="mobile" data-sortable="true"><?php echo e(__('mobile')); ?></th>
                                <th scope="col" data-field="email"><?php echo e(__('email')); ?></th>
                                <th scope="col" data-field="staff.salary" data-visible="false"><?php echo e(__('Salary')); ?></th>
                                <?php if(!Auth::user()->school_id): ?>
                                    <th scope="col" data-field="support_school" data-formatter="schoolNameFormatter"><?php echo e(__('assign_schools')); ?></th>
                                <?php endif; ?>
                                <th scope="col" data-field="created_at" data-formatter="dateTimeFormatter" data-sortable="true" data-visible="false"><?php echo e(__('created_at')); ?></th>
                                <th scope="col" data-field="updated_at" data-formatter="dateTimeFormatter" data-sortable="true" data-visible="false"><?php echo e(__('updated_at')); ?></th>
                                <th scope="col" data-field="operate" data-events="staffEvents" data-escape="false"><?php echo e(__('action')); ?></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Edit Staff')); ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="pt-3 edit-staff-form" id="edit-form" action="<?php echo e(url('staff')); ?>" novalidate="novalidate">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="edit_role_id"><?php echo e(__('role')); ?> <span class="text-danger">*</span></label>
                                        <select name="role_id" id="edit_role_id" class="form-control" required>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="edit_first_name"><?php echo e(__('first_name')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" name="first_name" id="edit_first_name" placeholder="<?php echo e(__('first_name')); ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="edit_last_name"><?php echo e(__('last_name')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" name="last_name" id="edit_last_name" placeholder="<?php echo e(__('last_name')); ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="edit_mobile"><?php echo e(__('mobile')); ?> <span class="text-danger">*</span></label>
                                        <input type="number" name="mobile" id="edit_mobile" min="0" placeholder="<?php echo e(__('mobile')); ?>" class="form-control remove-number-increment" required>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="edit_email"><?php echo e(__('email')); ?> <span class="text-danger">*</span></label>
                                        <input type="email" name="email" id="edit_email" placeholder="<?php echo e(__('email')); ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label><?php echo e(__('image')); ?> <span class="text-info text-small">(308px*338px)</span></label>
                                        <input type="file" name="image" class="file-upload-default"/>
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="<?php echo e(__('image')); ?>" required/>
                                            <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-theme" type="button"><?php echo e(__('upload')); ?></button>
                                        </span>
                                        </div>
                                        <div style="width: 60px;">
                                            <img src="" id="edit_staff_image" class="img-fluid w-100" alt=""/>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label><?php echo e(__('dob')); ?> <span class="text-danger">*</span></label>
                                        <?php echo Form::text('dob', null, ['required', 'placeholder' => __('dob'), 'class' => 'datepicker-popup-no-future form-control edit-dob','autocomplete'=>'off']); ?>

                                        <span class="input-group-addon input-group-append">
                                        </span>
                                    </div>
                                   
                                    <?php if(Auth::user()->school_id): ?>
                                        <div class="form-group col-sm-12 col-md-4">
                                            <label for="edit_salary"><?php echo e(__('Salary')); ?> <span class="text-danger">*</span></label>
                                            <input type="number" name="salary" id="edit_salary" placeholder="<?php echo e(__('Salary')); ?>" class="form-control" min="0" required>
                                        </div>

                                        <div class="form-group col-sm-12 col-md-4">
                                            <label for="joining_date"><?php echo e(__('joining_date')); ?></label>
                                            <?php echo Form::text('joining_date', null, ['placeholder' => __('joining_date'), 'class' => 'datepicker-popup form-control','autocomplete'=>'off','id' => 'edit_joining_date']); ?>

                                        </div>
                                    <?php endif; ?>


                                    <?php if(!Auth::user()->school_id): ?>
                                        <div class="form-group col-sm-12 col-md-4">
                                            <label for="assign_schools"><?php echo e(__('assign')); ?> <?php echo e(__('schools')); ?></label>
                                            <?php echo Form::select('school_id[]', $schools, null, ['class' => 'form-control select2-dropdown select2-hidden-accessible','multiple','id' => 'edit_school_id']); ?>

                                        </div>
                                    <?php endif; ?>
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('close')); ?></button>
                                <input class="btn btn-theme" type="submit" value=<?php echo e(__('submit')); ?> />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        let userIds;
        $('.table-list-type').on('click', function (e) {
            let value = $(this).data('value');
            let ActiveLang = window.trans['Active'];
            let DeactiveLang = window.trans['Inactive'];
            if (value === "" || value === "active" || value == null) {
                $("#update-status").data("id")
                $('.update-status-btn-name').html(DeactiveLang);
            } else {
                $('.update-status-btn-name').html(ActiveLang);
            }
        })


        function updateUserStatus(tableId, buttonClass) {
            var selectedRows = $(tableId).bootstrapTable('getSelections');
            var selectedRowsValues = selectedRows.map(function (row) {
                return row.id;
            });
            userIds = JSON.stringify(selectedRowsValues);

            if (buttonClass != null) {
                if (selectedRowsValues.length) {
                    $(buttonClass).prop('disabled', false);
                } else {
                    $(buttonClass).prop('disabled', true);
                }
            }
        }

        $('#table_list').bootstrapTable({
            onCheck: function (row) {
                updateUserStatus("#table_list", '#update-status');
            },
            onUncheck: function (row) {
                updateUserStatus("#table_list", '#update-status');
            },
            onCheckAll: function (rows) {
                updateUserStatus("#table_list", '#update-status');
            },
            onUncheckAll: function (rows) {
                updateUserStatus("#table_list", '#update-status');
            }
        });
        $("#update-status").on('click', function (e) {
            Swal.fire({
                title: window.trans["Are you sure"],
                text: window.trans["Change Status For Selected Users"],
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: window.trans["Yes, Change it"],
                cancelButtonText: window.trans["Cancel"]
            }).then((result) => {
                if (result.isConfirmed) {
                    let url = baseUrl + '/staff/change-status-bulk';
                    let data = new FormData();
                    data.append("ids", userIds)

                    function successCallback(response) {
                        $('#table_list').bootstrapTable('refresh');
                        $('#update-status').prop('disabled', true);
                        userIds = null;
                        showSuccessToast(response.message);
                    }

                    function errorCallback(response) {
                        showErrorToast(response.message);
                    }

                    ajaxRequest('POST', url, data, null, successCallback, errorCallback);
                }
            })
        })


    </script>
    <script type="text/javascript">

        document.addEventListener('DOMContentLoaded', function() {
            let allowanceCounter = 1; // Initialize a counter for new allowance rows

            // Function to toggle visibility of amount and percentage fields
            function toggleAllowanceFields(allowanceTypeElement) {
                const selectedOption = allowanceTypeElement.options[allowanceTypeElement.selectedIndex];
                const allowanceType = selectedOption.getAttribute('data-type');
                const allowanceValue = selectedOption.getAttribute('data-value');
                const allowanceDiv = allowanceTypeElement.closest('.allowance_type_div');
                const amountDiv = allowanceDiv.querySelector('#amount_allowance_div');
                const percentageDiv = allowanceDiv.querySelector('#percentage_allowance_div');
            
                if (allowanceType === 'amount') {
                    percentageDiv.style.display = 'none';
                    amountDiv.style.display = 'block';
                    allowanceDiv.querySelector('.allowance_amount').value = allowanceValue;
                    allowanceDiv.querySelector('.allowance_percentage').value = '';
                } else if (allowanceType === 'percentage') {
                    amountDiv.style.display = 'none';
                    percentageDiv.style.display = 'block';
                    allowanceDiv.querySelector('.allowance_amount').value = '';
                    allowanceDiv.querySelector('.allowance_percentage').value = allowanceValue;
                } else {
                    amountDiv.style.display = 'none';
                    percentageDiv.style.display = 'none';
                }
            }

            // Attach change event listener to the initial allowance type dropdown
            document.querySelectorAll('.allowance_id').forEach(function(element) {
                element.addEventListener('change', function() {
                    toggleAllowanceFields(element);
                });
            });

            // Repeater functionality to handle adding new allowance rows
            const addAllowanceButton = document.querySelector('.add-allowance-div');
            const allowanceDataContainer = document.querySelector('[data-repeater-list="allowance_data"]');

            addAllowanceButton.addEventListener('click', function() {
                const newItem = allowanceDataContainer.querySelector('[data-repeater-item]').cloneNode(true);

                // Clear input values
                allowanceDataContainer.querySelector('#allowance_type_div').style.display = '';
                newItem.querySelectorAll('input').forEach(input => input.value = '');
                newItem.querySelector('.allowance_id').value = '';
                newItem.querySelector('#amount_allowance_div').style.display = 'none';
                newItem.querySelector('#percentage_allowance_div').style.display = 'none';

                // Update the name attributes
                newItem.querySelectorAll('[name]').forEach(input => {
                    const name = input.getAttribute('name');
                    const newName = name.replace(/\[\d+\]/, `[${allowanceCounter}]`);
                    input.setAttribute('name', newName);
                });

                // Increment the counter
                allowanceCounter++;

                // Add event listeners to new elements
                newItem.querySelector('.allowance_id').addEventListener('change', function() {
                    toggleAllowanceFields(newItem.querySelector('.allowance_id'));
                });
                newItem.querySelector('.remove-allowance-div').addEventListener('click', function() {
                    newItem.remove();
                });

                allowanceDataContainer.appendChild(newItem);
            });

            // Attach click event listener to the initial remove button
            document.querySelectorAll('.remove-allowance-div').forEach(function(button) {
                button.addEventListener('click', function() {
                    // button.closest('[data-repeater-item]').remove();
                    button.closest('[data-repeater-item]').style.display = 'none';
                });
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            let deductionCounter = 1; // Initialize a counter for new deduction rows

            // Function to toggle visibility of amount and percentage fields
            function toggleDeductionFields(deductionTypeElement) {
                const selectedOption = deductionTypeElement.options[deductionTypeElement.selectedIndex];
                const deductionType = selectedOption.getAttribute('data-type');
                const deductionValue = selectedOption.getAttribute('data-value');
                const deductionDiv = deductionTypeElement.closest('.deduction_type_div');
                const amountDiv = deductionDiv.querySelector('#amount_deduction_div');
                const percentageDiv = deductionDiv.querySelector('#percentage_deduction_div');
            
                if (deductionType === 'amount') {
                    percentageDiv.style.display = 'none';
                    amountDiv.style.display = 'block';
                    deductionDiv.querySelector('.deduction_amount').value = deductionValue;
                    deductionDiv.querySelector('.deduction_percentage').value = '';
                } else if (deductionType === 'percentage') {
                    amountDiv.style.display = 'none';
                    percentageDiv.style.display = 'block';
                    deductionDiv.querySelector('.deduction_amount').value = '';
                    deductionDiv.querySelector('.deduction_percentage').value = deductionValue;
                } else {
                    amountDiv.style.display = 'none';
                    percentageDiv.style.display = 'none';
                }
            }

            // Attach change event listener to the initial deduction type dropdown
            document.querySelectorAll('.deduction_id').forEach(function(element) {
                element.addEventListener('change', function() {
                    toggleDeductionFields(element);
                });
            });

            // Repeater functionality to handle adding new deduction rows
            const addDeductionButton = document.querySelector('.add-deduction-div');
            const deductionDataContainer = document.querySelector('[data-repeater-list="deduction_data"]');

            addDeductionButton.addEventListener('click', function() {
                const newItem = deductionDataContainer.querySelector('[data-repeater-item]').cloneNode(true);

                // Clear input values
                deductionDataContainer.querySelector('#deduction_type_div').style.display = '';
                newItem.querySelectorAll('input').forEach(input => input.value = '');
                newItem.querySelector('.deduction_id').value = '';
                newItem.querySelector('#amount_deduction_div').style.display = 'none';
                newItem.querySelector('#percentage_deduction_div').style.display = 'none';

                // Update the name attributes
                newItem.querySelectorAll('[name]').forEach(input => {
                    const name = input.getAttribute('name');
                    const newName = name.replace(/\[\d+\]/, `[${deductionCounter}]`);
                    input.setAttribute('name', newName);
                });

                // Increment the counter
                deductionCounter++;

                // Add event listeners to new elements
                newItem.querySelector('.deduction_id').addEventListener('change', function() {
                    toggleDeductionFields(newItem.querySelector('.deduction_id'));
                });
                newItem.querySelector('.remove-deduction-div').addEventListener('click', function() {
                    newItem.remove();
                });

                deductionDataContainer.appendChild(newItem);
            });

            // Attach click event listener to the initial remove button
            document.querySelectorAll('.remove-deduction-div').forEach(function(button) {
                button.addEventListener('click', function() {
                    // button.closest('[data-repeater-item]').remove();
                    button.closest('[data-repeater-item]').style.display = 'none';
                });
            });
        });

        

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/staff/index.blade.php ENDPATH**/ ?>