<?php $__env->startSection('title','Expense'); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e(__("t.expense_type")); ?></h3>
        </div>

        <div class="title_right">
            <div class="form-group pull-right top_search">

                <?php if($adminHasPermition->can(['expense_add'])): ?>
                    <a href="<?php echo e(url('admin/expense-create')); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo e(__("t.add_expense")); ?>

                        </a>
                <?php endif; ?>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_content">

                    <table id="ExpenseDatatable" class="table" >
                        <thead>
                        <tr>

                            <th width="3%;"><?php echo e(__("t.no")); ?></th>
                            <th width="15%"> <?php echo e(__("t.invoice_no")); ?></th>
                            <th width="30%"><?php echo e(__("t.vendor")); ?></th>
                            <th width="10%"><?php echo e(__("t.total")); ?></th>
                            <th width="10%"><?php echo e(__("t.paid")); ?></th>
                            <th width="15%"><?php echo e(__("t.due")); ?></th>
                            <th width="5%"><?php echo e(__("t.status")); ?></th>
                            <th width="5%;"><?php echo e(__("t.action")); ?></th>

                        </tr>
                        </thead>


                    </table>
                </div>
            </div>
        </div>

    </div>
    <div id="load-modal"></div>

    <input type="hidden" name="token-value"
           id="token-value"
           value="<?php echo e(csrf_token()); ?>">

    <input type="hidden" name="expense-list"
           id="expense-list"
           value="<?php echo e(url('admin/expense-list')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/expense/expense-datatable.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>