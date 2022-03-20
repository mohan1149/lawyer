<?php $__env->startSection('title','Role'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">

        <?php $__env->startComponent('component.modal_heading',
             [
             'page_title' => __("t.role"),
             'action'=>route("role.create"),
             'model_title'=> __("t.add_role"),
             'modal_id'=>'#addtag',
              'permission' => '1'
             ] ); ?>

        <?php echo $__env->renderComponent(); ?>


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table id="roleDataTable" class="table" data-url="<?php echo e(route('role.list')); ?>" >
                            <thead>
                            <tr>
                                <th width="5%"><?php echo e(__("t.No")); ?></th>
                                <th><?php echo e(__("t.role")); ?></th>
                                <th width="2%" data-orderable="false"><?php echo e(__("t.action")); ?></th>
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
    <script src="<?php echo e(asset('assets/js/role/role-datatable.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>