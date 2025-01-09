<?php $__env->startSection('title'); ?>
    <?php echo e(__('addons')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('manage').' '.__('addons')); ?>

            </h3>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e(__('create').' '.__('addons')); ?>

                        </h4>
                        <span class="text-danger">
                            * <?php echo e(__('The validity of add-on is determined by the expiration date of package')); ?>.
                        </span>
                        <form class="pt-3 mt-2 create-form" id="formdata" action="<?php echo e(route('addons.store')); ?>" method="POST" novalidate="novalidate">
                            <div class="row">
                                <div class="form-group col-sm-6 col-md-4">
                                    <label><?php echo e(__('name')); ?> <span class="text-danger">*</span></label>
                                    <input name="name" type="text" placeholder="<?php echo e(__('name')); ?>" class="form-control" required/>
                                </div>

                                <div class="form-group col-sm-12 col-md-3">
                                    <label for=""><?php echo e(__('price')); ?> <span class="text-danger">*</span></label>
                                    <input type="number" name="price" class="form-control" required placeholder="<?php echo e(__('price')); ?>" min="0">
                                </div>
                                <div class="col-sm-12 col-md-12 mt-3">
                                    <label for=""><?php echo e(__('features')); ?></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-group col-sm-12 col-md-3">
                                        <input id="<?php echo e(__($feature->name)); ?>" class="feature-radio" type="radio" name="feature_id" value="<?php echo e($feature->id); ?>"/>
                                        <label class="feature-list text-center" for="<?php echo e(__($feature->name)); ?>"><?php echo e(__($feature->name)); ?></label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <h4 class="card-title">
                            <?php echo e(__('list').' '.__('addons')); ?>

                        </h4>
                        <div class="col-12 text-right">
                            <b><a href="#" class="table-list-type active mr-2" data-id="0"><?php echo e(__('all')); ?></a></b> | <a href="#" class="ml-2 table-list-type" data-id="1"><?php echo e(__("Trashed")); ?></a>
                        </div>
                        <table aria-describedby="mydesc" class='table' id='table_list'
                               data-toggle="table" data-url="<?php echo e(route('addons.show',1)); ?>"
                               data-click-to-select="true" data-side-pagination="server"
                               data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]"
                               data-search="true" data-toolbar="#toolbar" data-show-columns="true"
                               data-show-refresh="true" data-fixed-columns="false" data-fixed-number="2"
                               data-fixed-right-number="1" data-trim-on-search="false"
                               data-mobile-responsive="true" data-sort-name="id"
                               data-sort-order="desc" data-maintain-selected="true"
                               data-query-params="queryParams" data-show-export="true"
                               data-export-options='{"fileName": "addons-<?= date('d-m-y') ?>","ignoreColumn": ["operate"]}'
                                data-escape="true">
                            <thead>
                            <tr>
                                <th scope="col" data-field="id" data-sortable="true" data-visible="false"><?php echo e(__('id')); ?></th>
                                <th scope="col" data-field="no"><?php echo e(__('no.')); ?></th>
                                <th scope="col" data-field="name"><?php echo e(__('name')); ?></th>
                                <th scope="col" data-field="feature.name"><?php echo e(__('feature')); ?></th>
                                <th scope="col" data-field="price"><?php echo e(__('price')); ?></th>
                                <th scope="col" data-field="status" data-formatter="yesAndNoStatusFormatter"><?php echo e(__('status')); ?></th>
                                <th scope="col" data-field="operate" data-events="addonEvents" data-escape="false"><?php echo e(__('action')); ?></th>
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
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('edit').' '.__('addon')); ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="pt-3 edit-form" id="formdata" action="<?php echo e(url('addon')); ?>" novalidate="novalidate">
                            <input type="hidden" name="id" id="edit_id" value=""/>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-4">
                                        <label><?php echo e(__('name')); ?> <span class="text-danger">*</span></label>
                                        <input name="name" id="edit_name" type="text" placeholder="<?php echo e(__('name')); ?>" class="form-control" required/>
                                    </div>

                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for=""><?php echo e(__('price')); ?> <span class="text-danger">*</span></label>
                                        <input type="number" min="0" name="price" id="edit_price" class="form-control" placeholder="<?php echo e(__('price')); ?>" required>
                                    </div>

                                    <div class="form-group col-sm-12 col-md-12">
                                        <label for=""><?php echo e(__('feature')); ?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <input id="<?php echo e(__($feature->id)); ?>" class="feature-radio" type="radio" class="feature_id" name="feature_id" value="<?php echo e($feature->id); ?>"/>
                                        <label class="feature-list text-center" for="<?php echo e(__($feature->id)); ?>"><?php echo e(__($feature->name)); ?></label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/addons/index.blade.php ENDPATH**/ ?>