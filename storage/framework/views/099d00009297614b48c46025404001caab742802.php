<?php $__env->startSection('title','Vendor'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <?php $__env->startComponent('component.heading' , [

  'page_title' => __("t.vendor"),
  'action' => route('vendor.create') ,
  'text' => __("t.add_vendor"),
   'permission' => $adminHasPermition->can(['vendor_add'])
   ]); ?>
        <?php echo $__env->renderComponent(); ?>


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table id="Vendordatatable" class="table"
                               data-url="<?php echo e(route('vendor.list')); ?>">
                            <thead>
                            <tr>
                                <th><?php echo e(__("t.no")); ?></th>
                                <th width="40%"><?php echo e(__("t.name")); ?></th>
                                <th width="40%"><?php echo e(__("t.mobile")); ?></th>
                                <th data-orderable="false"><?php echo e(__("t.status")); ?></th>
                                <th data-orderable="false"><?php echo e(__("t.action")); ?></th>
                            </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/vendor/vendor-datatable.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>