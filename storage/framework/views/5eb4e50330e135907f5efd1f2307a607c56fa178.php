<?php $__env->startSection('title','Task'); ?>
<?php $__env->startSection('content'); ?>

    <div class="">
        <?php $__env->startComponent('component.heading' , [
       'page_title' => __("t.task"),
       'action' => route('tasks.create') ,
       'text' => __("t.add_task"),
       'permission' => $adminHasPermition->can(['task_add'])
        ]); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table id="clientDataTable" class="table" data-url="<?php echo e(route('task.list')); ?>"
                              >
                            <thead>
                            <tr>
                                <th><?php echo e(__("t.no")); ?></th>
                                <th><?php echo e(__("t.task_name")); ?></th>
                                <th><?php echo e(__("t.related_to")); ?></th>
                                <th><?php echo e(__("t.start_date")); ?></th>
                                <th><?php echo e(__("t.deadline")); ?></th>
                                <th><?php echo e(__("t.members")); ?></th>
                                <th><?php echo e(__("t.status")); ?></th>
                                <th><?php echo e(__("t.priority")); ?></th>
                                <th data-orderable="false" class="text-center"><?php echo e(__("t.action")); ?></th>
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
    <script src="<?php echo e(asset('assets/js/task/task-datatable.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>