<?php $__env->startSection('title'); ?>
    <?php echo e(__('general_settings')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('general_settings')); ?>

            </h3>
        </div>
        <div class="row grid-margin">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form id="formdata" class="create-form-without-reset" action="<?php echo e(route('system-settings.store')); ?>" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            
                            <div class="border border-secondary rounded-lg my-4 mx-1">
                                <div class="col-md-12 mt-3">
                                    <h4><?php echo e(__('System Settings')); ?></h4>
                                </div>
                                <div class="col-12 mb-3">
                                    <hr class="mt-0">
                                </div>
                                <div class="row my-4 mx-1">
                                    <div class="form-group col-md-4 col-sm-12">
                                        <label for="system_name"><?php echo e(__('system_name')); ?> <span class="text-danger">*</span></label>
                                        <input name="system_name" id="system_name" value="<?php echo e($settings['system_name'] ?? ''); ?>" type="text" required placeholder="<?php echo e(__('system_name')); ?>" class="form-control"/>
                                    </div>

                                    <div class="form-group col-md-4 col-sm-12">
                                        <label for="mobile"><?php echo e(__('mobile')); ?> <span class="text-danger">*</span></label>
                                        <input name="mobile" id="mobile" value="<?php echo e($settings['mobile'] ?? ''); ?>" type="number" required placeholder="<?php echo e(__('mobile')); ?>" class="form-control"/>
                                    </div>

                                    <div class="form-group col-md-4 col-sm-12">
                                        <label for="tag_line"><?php echo e(__('tag_line')); ?> <span class="text-danger">*</span></label>
                                        <input name="tag_line" id="tag_line" value="<?php echo e($settings['tag_line'] ?? ''); ?>" type="text" required placeholder="<?php echo e(__('tag_line')); ?>" class="form-control"/>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="hero_description"><?php echo e(__('description')); ?> <span class="text-danger">*</span></label>
                                        <textarea name="hero_description" id="hero_description" required placeholder="<?php echo e(__('description')); ?>" class="form-control"><?php echo e($settings['hero_description'] ?? null); ?></textarea>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="address"><?php echo e(__('address')); ?> <span class="text-danger">*</span></label>
                                        <textarea name="address" id="address" required placeholder="<?php echo e(__('address')); ?>" class="form-control"><?php echo e($settings['address'] ?? null); ?></textarea>
                                    </div>

                                    <div class="form-group col-md-6 col-lg-6 col-xl-4 col-sm-12">
                                        <label for="time_zone"><?php echo e(__('time_zone')); ?></label>
                                        <select name="time_zone" id="time_zone" required class="form-control"
                                                style="width:100%">
                                            <?php $__currentLoopData = $getTimezoneList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timezone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($timezone[2]); ?>"<?php echo e(isset($settings['time_zone']) && $settings['time_zone'] == $timezone[2] ? 'selected' : ''); ?>><?php echo e($timezone[2] . ' - GMT ' . $timezone[1] . ' - ' . $timezone[0]); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-4 col-sm-12">
                                        <label for="date_format"><?php echo e(__('date_format')); ?></label>
                                        <select name="date_format" id="date_format" required class="form-control">
                                            <?php $__currentLoopData = $getDateFormat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dateformat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>"<?php echo e(isset($settings['date_format']) && $settings['date_format'] == $key ? 'selected' : ''); ?>><?php echo e($dateformat); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-4 col-sm-12">
                                        <label for="time_format"><?php echo e(__('time_format')); ?></label>
                                        <select name="time_format" id="time_format" required class="form-control">
                                            <?php $__currentLoopData = $getTimeFormat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $timeFormat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>"<?php echo e(isset($settings['time_format']) && $settings['time_format'] == $key ? 'selected' : ''); ?>><?php echo e($timeFormat); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row my-4 mx-1">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-4 col-sm-12">
                                        <label for="favicon"><?php echo e(__('favicon')); ?> <span class="text-danger">*</span></label>
                                        <input type="file" name="favicon" class="file-upload-default"/>
                                        <div class="input-group col-xs-12">
                                            <input type="text" id="favicon" class="form-control file-upload-info" disabled="" placeholder="<?php echo e(__('favicon')); ?>"/>
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-theme" type="button"><?php echo e(__('upload')); ?></button>
                                            </span>
                                            <div class="col-md-12 mt-2">
                                                <img height="50px" src='<?php echo e($settings['favicon'] ?? ''); ?>' alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-4 col-sm-12">
                                        <label for="horizontal_logo"><?php echo e(__('horizontal_logo')); ?> <span class="text-danger">*</span></label>
                                        <input type="file" name="horizontal_logo" class="file-upload-default"/>
                                        <div class="input-group col-xs-12">
                                            <input type="text" id="horizontal_logo" class="form-control file-upload-info" disabled="" placeholder="<?php echo e(__('horizontal_logo')); ?>"/>
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-theme" type="button"><?php echo e(__('upload')); ?></button>
                                            </span>
                                            <div class="col-md-12 mt-2">
                                                <img height="50px" src='<?php echo e($settings['horizontal_logo'] ?? ''); ?>' alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-4 col-sm-12">
                                        <label for="vertical_logo"><?php echo e(__('vertical_logo')); ?> <span class="text-danger">*</span></label>
                                        <input type="file" name="vertical_logo" class="file-upload-default"/>
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" id="vertical_logo" disabled="" placeholder="<?php echo e(__('vertical_logo')); ?>"/>
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-theme" type="button"><?php echo e(__('upload')); ?></button>
                                            </span>
                                            <div class="col-md-12 mt-2">
                                                <img height="50px" src='<?php echo e($settings['vertical_logo'] ?? ''); ?>' alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 col-lg-6 col-xl-4 col-sm-12">
                                        <label for="login_page_logo"><?php echo e(__('login_page_logo')); ?> <span class="text-danger">*</span></label>
                                        <input type="file" name="login_page_logo" class="file-upload-default" />
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" id="login_page_logo" disabled="" placeholder="<?php echo e(__('login_page_logo')); ?>" />
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-theme" type="button"><?php echo e(__('upload')); ?></button>
                                            </span>
                                            <div class="col-md-12 mt-2">
                                                <img height="50px" src='<?php echo e($settings['login_page_logo'] ?? ''); ?>' alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 col-lg-6 col-xl-4 col-sm-12">
                                        <label for="theme_color"><?php echo e(__('color')); ?></label>
                                        <input name="theme_color" id="theme_color" value="<?php echo e($settings['theme_color'] ?? ''); ?>" type="text" required placeholder="<?php echo e(__('color')); ?>" class="color-picker"/>
                                    </div>

                                    <div class="form-group col-md-4 col-sm-12">
                                        <label for="School Code Prefix"><?php echo e(__('School Code Prefix')); ?> <span class="text-danger">*</span></label>
                                        <input name="school_code_prefix" id="school_code_prefix" value="<?php echo e($settings['school_code_prefix'] ?? 'SCH'); ?>" type="text" required placeholder="<?php echo e(__('School Code Prefix')); ?>" class="form-control"/>
                                    </div>


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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/settings/system-settings.blade.php ENDPATH**/ ?>