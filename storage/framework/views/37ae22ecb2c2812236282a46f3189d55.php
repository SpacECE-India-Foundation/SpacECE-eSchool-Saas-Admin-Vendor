<?php $__env->startSection('title'); ?>
    <?php echo e(__('students')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('manage') . ' ' . __('students')); ?>

            </h3>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e(__('create') . ' ' . __('students')); ?>

                        </h4>
                        <form class="pt-3 student-registration-form" id="create-form" data-success-function="formSuccessFunction" enctype="multipart/form-data" action="<?php echo e(route('students.store')); ?>" method="POST" novalidate="novalidate">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-3">
                                    <label><?php echo e(__('Gr Number')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::text('admission_no', $admission_no, ['readonly','placeholder' => __('Gr Number'), 'class' => 'form-control']); ?>

                                </div>

                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-3">
                                    <label for="class_section"><?php echo e(__('class_section')); ?> <span class="text-danger">*</span></label>
                                    <select name="class_section_id" id="class_section" class="form-control select2">
                                        <option value=""><?php echo e(__('select') . ' ' . __('Class') . ' ' . __('section')); ?></option>
                                        <?php if(count($class_sections)): ?>
                                            <?php $__currentLoopData = $class_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class_section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($class_section->id); ?>"><?php echo e($class_section->full_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                </div>

                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-3">
                                    <label for="session_year_id"><?php echo e(__('session_year')); ?> <span class="text-danger">*</span></label>
                                    <select name="session_year_id" id="session_year_id" class="form-control select2">
                                        <?php if(count($sessionYears)): ?>
                                            <?php $__currentLoopData = $sessionYears; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($year->id); ?>" <?php echo e($year->default==1 ? "selected" : ""); ?>><?php echo e($year->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                </div>

                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-3">
                                    <label><?php echo e(__('admission_date')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::text('admission_date', null, ['placeholder' => __('admission_date'), 'class' => 'datepicker-popup-no-future form-control','id'=>'admission_date','autocomplete'=>'off']); ?>

                                    <span class="input-group-addon input-group-append">
                                    </span>
                                </div>


                                <?php if(!empty($features) ): ?>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label><?php echo e(__('Status')); ?> <span class="text-danger">*</span></label><br>
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
                                        <span class="text-danger small"><?php echo e(__('Note').':-'.__('Activating this will consider in your current subscription cycle')); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <hr>
                            <div class="row mt-5">
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <label><?php echo e(__('first_name')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::text('first_name', null, ['placeholder' => __('first_name'), 'class' => 'form-control']); ?>


                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <label><?php echo e(__('last_name')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::text('last_name', null, ['placeholder' => __('last_name'), 'class' => 'form-control']); ?>


                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <label><?php echo e(__('dob')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::text('dob', null, ['placeholder' => __('dob'), 'class' => 'datepicker-popup-no-future form-control','autocomplete'=>'off']); ?>

                                    <span class="input-group-addon input-group-append">
                                    </span>
                                </div>

                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <label><?php echo e(__('gender')); ?> <span class="text-danger">*</span></label><br>
                                    <div class="d-flex">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <?php echo Form::radio('gender', 'male',true); ?>

                                                <?php echo e(__('male')); ?>

                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <?php echo Form::radio('gender', 'female'); ?>

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
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <label><?php echo e(__('mobile')); ?></label>
                                    <?php echo Form::number('mobile', null, ['placeholder' => __('mobile'), 'min' => 0 ,'class' => 'form-control remove-number-increment']); ?>

                                </div>
                                <div class="form-group col-sm-12 col-md-6">
                                    <label><?php echo e(__('current_address')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::textarea('current_address', null, ['required', 'placeholder' => __('current_address'), 'class' => 'form-control', 'rows' => 3]); ?>

                                </div>
                                <div class="form-group col-sm-12 col-md-6">
                                    <label><?php echo e(__('permanent_address')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::textarea('permanent_address', null, ['required', 'placeholder' => __('permanent_address'), 'class' => 'form-control', 'rows' => 3]); ?>

                                </div>
                            </div>

                            <?php if(count($extraFields)): ?>
                                <div class="row other-details">

                                    
                                    <?php $__currentLoopData = $extraFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <?php echo e(Form::hidden('extra_fields['.$key.'][id]', '', ['id' => $data->type.'_'.$key.'_id'])); ?>


                                        
                                        <?php echo e(Form::hidden('extra_fields['.$key.'][form_field_id]', $data->id, ['id' => $data->type.'_'.$key.'_id'])); ?>


                                        <div class='form-group col-md-12 col-lg-6 col-xl-4 col-sm-12'>

                                            
                                            <?php if($data->type != 'radio' && $data->type != 'checkbox'): ?>
                                                <label><?php echo e($data->name); ?> <?php if($data->is_required): ?>
                                                        <span class="text-danger">*</span>
                                                    <?php endif; ?></label>
                                            <?php endif; ?>

                                            
                                            <?php if($data->type == 'text'): ?>
                                                <?php echo e(Form::text('extra_fields['.$key.'][data]', '', ['class' => 'form-control text-fields', 'id' => $data->type.'_'.$key, 'placeholder' => $data->name, ($data->is_required == 1 ? 'required' : '')])); ?>

                                                
                                            <?php elseif($data->type == 'number'): ?>
                                                <?php echo e(Form::number('extra_fields['.$key.'][data]', '', ['min' => 0, 'class' => 'form-control number-fields', 'id' => $data->type.'_'.$key, 'placeholder' => $data->name, ($data->is_required == 1 ? 'required' : '')])); ?>


                                                
                                            <?php elseif($data->type == 'dropdown'): ?>
                                                <?php echo e(Form::select('extra_fields['.$key.'][data]',$data->default_values,null,
                                                    ['id' => $data->type.'_'.$key,'class' => 'form-control select-fields',
                                                        ($data->is_required == 1 ? 'required' : ''),
                                                        'placeholder' => 'Select '.$data->name
                                                    ]
                                                )); ?>


                                                
                                            <?php elseif($data->type == 'radio'): ?>
                                                <label class="d-block"><?php echo e($data->name); ?> <?php if($data->is_required): ?>
                                                        <span class="text-danger">*</span>
                                                    <?php endif; ?></label>
                                                <div class="row col-md-12 col-lg-12 col-xl-6 col-sm-12">
                                                    <?php if(count($data->default_values)): ?>
                                                        <?php $__currentLoopData = $data->default_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyRadio => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-check mr-2">
                                                                <label class="form-check-label">
                                                                    <?php echo e(Form::radio('extra_fields['.$key.'][data]', $value, null, ['id' => $data->type.'_'.$keyRadio, 'class' => 'radio-fields',($data->is_required == 1 ? 'required' : '')])); ?>

                                                                    <?php echo e($value); ?>

                                                                </label>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </div>

                                                
                                            <?php elseif($data->type == 'checkbox'): ?>
                                                <label class="d-block"><?php echo e($data->name); ?> <?php if($data->is_required): ?>
                                                        <span class="text-danger">*</span>
                                                    <?php endif; ?></label>
                                                <?php if(count($data->default_values)): ?>
                                                    <div class="row col-lg-12 col-xl-6 col-md-12 col-sm-12">
                                                        <?php $__currentLoopData = $data->default_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chkKey => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="mr-2 form-check">
                                                                <label class="form-check-label">
                                                                    <?php echo e(Form::checkbox('extra_fields['.$key.'][data][]', $value, null, ['id' => $data->type.'_'.$chkKey, 'class' => 'form-check-input chkclass checkbox-fields',($data->is_required == 1 ? 'required' : '')])); ?> <?php echo e($value); ?>


                                                                </label>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                <?php endif; ?>

                                                
                                            <?php elseif($data->type == 'textarea'): ?>
                                                <?php echo e(Form::textarea('extra_fields['.$key.'][data]', '', ['placeholder' => $data->name, 'id' => $data->type.'_'.$key, 'class' => 'form-control textarea-fields', ($data->is_required ? 'required' : '') , 'rows' => 3])); ?>


                                                
                                            <?php elseif($data->type == 'file'): ?>
                                                <div class="input-group col-xs-12">
                                                    <?php echo e(Form::file('extra_fields['.$key.'][data]', ['class' => 'file-upload-default', 'id' => $data->type.'_'.$key, ($data->is_required ? 'required' : '')])); ?>

                                                    <?php echo e(Form::text('', '', ['class' => 'form-control file-upload-info', 'disabled' => '', 'placeholder' => __('image')])); ?>

                                                    <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-theme" type="button"><?php echo e(__('upload')); ?></button>
                                                    </span>
                                                </div>
                                                <div id="file_div_<?php echo e($key); ?>" class="mt-2 d-none file-div">
                                                    <a href="" id="file_link_<?php echo e($key); ?>" target="_blank"><?php echo e($data->name); ?></a>
                                                </div>

                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <hr>
                            
                            <div class="row mt-5">
                                <div class="form-group col-sm-12 col-md-12">
                                    <label for="guardian_email"><?php echo e(__('guardian') . ' ' . __('email')); ?> <span class="text-danger">*</span></label>
                                    <select class="guardian-search form-control guardian_email" id="guardian_email"></select>
                                    <input type="hidden" id="guardian_email" class="guardian_email" name="guardian_email">
                                </div>

                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <label><?php echo e(__('guardian') . ' ' . __('first_name')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::text('guardian_first_name', null, ['placeholder' => __('guardian') . ' ' . __('first_name'), 'class' => 'form-control', 'id' => 'guardian_first_name']); ?>

                                </div>

                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <label><?php echo e(__('guardian') . ' ' . __('last_name')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::text('guardian_last_name', null, ['placeholder' => __('guardian') . ' ' . __('last_name'), 'class' => 'form-control', 'id' => 'guardian_last_name']); ?>

                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <label><?php echo e(__('guardian') . ' ' . __('mobile')); ?> <span class="text-danger">*</span></label>
                                    <?php echo Form::number('guardian_mobile', null, ['placeholder' => __('guardian') . ' ' . __('mobile'), 'class' => 'form-control remove-number-increment', 'id' => 'guardian_mobile','min' => 1 ]); ?>

                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                    <label><?php echo e(__('gender')); ?> <span class="text-danger">*</span></label><br>
                                    <div class="d-flex">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" checked name="guardian_gender" value="male" id="guardian_male">
                                                <?php echo e(__('male')); ?>

                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="guardian_gender" value="female" id="guardian_female">
                                                <?php echo e(__('female')); ?>

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-4 col-lg-6 col-xl-4">
                                    <label for="guardian_image"><?php echo e(__('image')); ?> </label>
                                    <input type="file" name="guardian_image" class="file-upload-default"/>
                                    <div class="input-group col-xs-12">
                                        <input type="text" id="guardian_image" class="form-control file-upload-info" disabled="" placeholder="<?php echo e(__('image')); ?>"/>
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-theme" type="button"><?php echo e(__('upload')); ?></button>
                                        </span>
                                    </div>
                                    <img id="guardian-image-preview" src="" alt="Guardian Image" class="img-fluid w-25"/>
                                </div>
                            </div>
                            <input class="btn btn-theme float-right ml-3" id="create-btn" type="submit" value=<?php echo e(__('submit')); ?>>
                            <input class="btn btn-secondary float-right" type="reset" value=<?php echo e(__('reset')); ?>>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function formSuccessFunction() {
            setTimeout(() => {
                window.location.reload()
            }, 3000);
        }

        $('#admission_date').datepicker({
            format: "dd-mm-yyyy",
            rtl: isRTL()
        }).datepicker("setDate", 'now');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/students/create.blade.php ENDPATH**/ ?>