<?php $__env->startSection('title'); ?>
    <?php echo e(__('transactions')); ?> <?php echo e(__('logs')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?php echo e(__('transactions')); ?> <?php echo e(__('logs')); ?>

            </h3>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card search-container">
                <div class="card">
                    <div class="card-body">
                        <div id="toolbar" class="row">
                            <div class="col col-md-4">
                                <label for="filter_payment_status" style="font-size: 0.86rem;width: 110px">
                                    <?php echo e(__('Payment Status')); ?>

                                </label>
                                <select name="filter_payment_status" id="filter_payment_status" class="form-control">
                                    <option value=""><?php echo e(__('all')); ?></option>
                                    <option value="failed"><?php echo e(__('failed')); ?></option>
                                    <option value="succeed"><?php echo e(__('succeed')); ?></option>
                                    <option value="pending"><?php echo e(__('pending')); ?></option>
                                </select>
                            </div>
                        </div>
                        <table aria-describedby="mydesc" class='table' id='table_list'
                               data-toggle="table" data-url="<?php echo e(url('subscriptions/transactions/list')); ?>"
                               data-click-to-select="true" data-side-pagination="server"
                               data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]"
                               data-search="true" data-toolbar="#toolbar" data-show-columns="true"
                               data-show-refresh="true" data-fixed-columns="false" data-fixed-number="2"
                               data-fixed-right-number="1" data-trim-on-search="false"
                               data-mobile-responsive="true" data-sort-name="id"
                               data-sort-order="desc" data-maintain-selected="true" data-export-types='all'
                               data-export-options='{ "fileName": "<?php echo e(__('fees')); ?>-<?php echo e(__('transactions')); ?>-<?= date(' d-m-y') ?>" ,"ignoreColumn":["operate"]}'
                               data-show-export="true" data-query-params="subscriptionTransactionQueryParams" data-escape="true">
                            <thead>
                            <tr>
                                <th scope="col" data-field="id" data-sortable="true" data-visible="false"><?php echo e(__('id')); ?></th>
                                <th scope="col" data-field="no"><?php echo e(__('no.')); ?></th>
                                <th scope="col" data-field="date" data-formatter="dateFormatter"><?php echo e(__('date')); ?></th>
                                <th scope="col" data-field="school.logo" data-formatter="imageFormatter" data-align="center"><?php echo e(__('logo')); ?></th>
                                <th scope="col" data-field="school.name" data-align="center"><?php echo e(__('school')); ?></th>
                                <th scope="col" data-field="amount" data-align="center"><?php echo e(__('Amount')); ?></th>
                                <th scope="col" data-field="payment_gateway" data-align="center" data-formatter="subscriptionTransactionParentGateway"><?php echo e(__('Payment Type')); ?></th>
                                <th scope="col" data-field="payment_status" data-align="center" data-formatter="transactionPaymentStatus"><?php echo e(__('Payment Status')); ?></th>
                                <th scope="col" data-field="order_id" data-align="center" data-visible="false"><?php echo e(__('order_id_cheque_number')); ?></th>
                                <th scope="col" data-field="payment_id" data-align="center" data-visible="false"><?php echo e(__('payment_id')); ?></th>
                                <th scope="col" data-field="created_at" data-formatter="dateTimeFormatter" data-sortable="true" data-visible="false"><?php echo e(__('created_at')); ?></th>
                                <th scope="col" data-field="updated_at" data-formatter="dateTimeFormatter" data-sortable="true" data-visible="false"><?php echo e(__('updated_at')); ?></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-management\resources\views/subscription/transaction_log.blade.php ENDPATH**/ ?>