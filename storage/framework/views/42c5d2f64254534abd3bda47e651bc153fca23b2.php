<?php $__env->startSection('title','Expense Type'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <?php $__env->startComponent('component.modal_heading',
             [
             'page_title' => __("t.expense_type"),
             'action'=>route("expense-type.create"),
             'model_title'=>__("t.add_expense_type"),
             'modal_id'=>'#addtag',
             'permission' => $adminHasPermition->can(['expense_type_add'])
             ] ); ?>
            Status
        <?php echo $__env->renderComponent(); ?>


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table id="tagDataTable" class="table" data-url="<?php echo e(route('expense.type.list')); ?>"
                              >
                            <thead>
                            <tr>
                                <th width="5%"><?php echo e(__("t.no")); ?></th>
                                <th><?php echo e(__("t.name")); ?></th>
                                <th width="5%" data-orderable="false"><?php echo e(__("t.status")); ?></th>
                                <th width="2%" data-orderable="false" class="text-center"><?php echo e(__("t.action")); ?></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="load-modal"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/expense/expense-type-datatable.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>