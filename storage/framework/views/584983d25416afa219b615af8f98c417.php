<?php $__env->startSection('title'); ?>
    <?php echo e(__('subscription')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('subscription')); ?>

            </h3>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="card aligner-wrapper">
                    <div class="custom-card-body">
                        <div class="absolute left top bottom h-100 v-strock-2 bg-success"></div>
                        <p class="text-muted mb-2"><?php echo e(__('registration')); ?></p>
                        <div class="d-flex align-items-center">
                            <h3 class="font-weight-medium mb-2"><?php echo e($data['registration']); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="card aligner-wrapper">
                    <div class="custom-card-body">
                        <div class="absolute left top bottom h-100 v-strock-2 bg-success"></div>
                        <p class="text-muted mb-2"><?php echo e(__('active')); ?></p>
                        <div class="d-flex align-items-center">
                            <h3 class="font-weight-medium mb-2"><?php echo e($data['active']); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="card aligner-wrapper">
                    <div class="custom-card-body">
                        <div class="absolute left top bottom h-100 v-strock-2 bg-danger"></div>
                        <p class="text-muted mb-2"><?php echo e(__('deactivate')); ?></p>
                        <div class="d-flex align-items-center">
                            <h3 class="font-weight-medium mb-2"><?php echo e($data['deactivate']); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="card aligner-wrapper">
                    <div class="custom-card-body">
                        <div class="absolute left top bottom h-100 v-strock-2 bg-danger"></div>
                        <p class="text-muted mb-2"><?php echo e(__('over_due')); ?></p>
                        <div class="d-flex align-items-center">
                            <h3 class="font-weight-medium mb-2"><?php echo e($data['over_due']); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="card aligner-wrapper">
                    <div class="custom-card-body">
                        <div class="absolute left top bottom h-100 v-strock-2 bg-danger"></div>
                        <p class="text-muted mb-2"><?php echo e(__('unpaid')); ?></p>
                        <div class="d-flex align-items-center">
                            <h3 class="font-weight-medium mb-2"><?php echo e($data['unpaid']); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="card aligner-wrapper">
                    <div class="custom-card-body">
                        <div class="absolute left top bottom h-100 v-strock-2 bg-success"></div>
                        <p class="text-muted mb-2"><?php echo e(__('paid')); ?></p>
                        <div class="d-flex align-items-center">
                            <h3 class="font-weight-medium mb-2"><?php echo e($data['paid']); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e(__('list') . ' ' . __('subscription')); ?>

                        </h4>
                        <div id="toolbar" class="row">
                            <div class="form-group col-sm-12 col-md-4">
                                <label class="filter-menu"><?php echo e(__('status')); ?></label>
                                <?php echo Form::select(
                                    'status',
                                    [
                                        '0' => __('all'),
                                        'Current Cycle' => __('current_cycle'),
                                        'Paid' => __('paid'),
                                        'Over Due' => __('over_due'),
                                        'Failed' => __('failed'),
                                        'Pending' => __('pending'),
                                        'Next Billing Cycle' => __('next_billing_cycle'),
                                        'Unpaid' => __('unpaid'),
                                        'Bill Not Generated' => __('bill_not_generated'),
                                    ],
                                    null,
                                    ['class' => 'form-control', 'id' => 'status'],
                                ); ?>

                            </div>
                        </div>
                        <table aria-describedby="mydesc" class='table' id='table_list'
                               data-toggle="table" data-url="<?php echo e(url('subscriptions/report/show')); ?>" data-click-to-select="true"
                               data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]"
                               data-search="true" data-toolbar="#toolbar" data-show-columns="true" data-show-refresh="true"
                               data-trim-on-search="false" data-mobile-responsive="true" data-sort-name="start_date"
                               data-sort-order="desc" data-maintain-selected="true" data-export-data-type='all'
                               data-export-options='{ "fileName": "<?php echo e(__('subscription')); ?>-<?= date(' d-m-y') ?> " ,"ignoreColumn":["operate"]}'
                               data-show-export="true" data-query-params="subscriptionReportQueryParams" data-escape="true">
                            <thead>
                            <tr>
                                <th scope="col" data-field="id" data-sortable="true" data-visible="false"><?php echo e(__('id')); ?></th>
                                <th scope="col" data-field="no"><?php echo e(__('no.')); ?></th>
                                <th scope="col" data-field="logo" data-formatter="imageFormatter"><?php echo e(__('logo')); ?></th>
                                <th scope="col" data-field="school_name"><?php echo e(__('school_name')); ?></th>
                                <th scope="col" data-field="plan" data-formatter="planDetailFormatter"><?php echo e(__('plan')); ?></th>
                                <th scope="col" data-field="bill_date"><?php echo e(__('bill_generate_date')); ?> </th>
                                <th scope="col" data-field="subscription_bill.due_date" data-formatter="dateFormatter"><?php echo e(__('bill_due_date')); ?> </th>
                                <th scope="col" data-field="amount"><?php echo e(__('bill_amount')); ?>(<?php echo e($settings['currency_symbol']); ?>)</th>
                                <th scope="col" data-field="status" class="text-center" data-formatter="subscriptionStatusFormatter"><?php echo e(__('status')); ?> </th>
                                <th scope="col" data-field="operate" data-escape="false" data-formatter="actionColumnFormatter" data-events="subscriptionExpiryEvents"><?php echo e(__('action')); ?></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('change_billing_cycle')); ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="pt-3 edit-form" method="post" action="<?php echo e(route('subscription.update.expiry')); ?>" novalidate="novalidate">
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id" value=""/>
                            <input type="hidden" name="school_id" id="school_id" value=""/>

                            <div class="form-group">
                                <label><?php echo e(__('extend_bill_date')); ?> <span class="text-danger">*</span></label>
                                <input name="end_date" id="end_date" type="text"
                                       placeholder="<?php echo e(__('extend_bill_date')); ?>" required
                                       class="form-control expiry-date"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal"><?php echo e(__('close')); ?></button>
                            <input class="btn btn-theme" type="submit" value=<?php echo e(__('submit')); ?> />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="change-bill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('change_bill_date')); ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="pt-3 edit-form" method="post" action="<?php echo e(route('subscription.change.bill.date')); ?>" novalidate="novalidate">
                        <div class="modal-body">
                            <input type="hidden" name="id" id="due_bill_id" value=""/>
                            <input type="hidden" name="school_id" id="due_bill_school_id" value=""/>

                            <div class="form-group">
                                <label><?php echo e(__('extend_bill_due_date')); ?> <span class="text-danger">*</span></label>
                                <input name="due_date" id="due_date" type="text"
                                       placeholder="<?php echo e(__('extend_bill_due_date')); ?>" required
                                       class="form-control due-date"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal"><?php echo e(__('close')); ?></button>
                            <input class="btn btn-theme" type="submit" value=<?php echo e(__('submit')); ?> />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="update-current-plan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('update_current_plan')); ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="pt-3 edit-form" method="post" action="<?php echo e(route('subscription.update-current-plan')); ?>" novalidate="novalidate">
                        <div class="modal-body">
                            <input type="hidden" name="id" id="current_plan_id" value=""/>

                            <div class="form-group">
                                <label><?php echo e(__('package')); ?> <span class="text-danger">*</span></label>
                                <?php echo Form::select('package_id', $packages, null, ['class' => 'form-control', 'id' => 'update_package_id']); ?>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal"><?php echo e(__('close')); ?></button>
                            <input class="btn btn-theme" type="submit" value=<?php echo e(__('submit')); ?> />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/schools/subscription.blade.php ENDPATH**/ ?>