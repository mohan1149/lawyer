<?php $__env->startSection('title','Task Create'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('component.heading' , [

    'page_title' => __("t.add_task"),
    'action' => route('tasks.index') ,
    'text' => 'Back'
     ]); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <?php echo $__env->make('component.error', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="x_panel">
                <form id="add_client" name="add_client" role="form" method="POST" autocomplete="nope"
                      action="<?php echo e(route('tasks.store')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="x_content">

                        <div class="row">

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.subject")); ?> <span class="text-danger">*</span></label>
                                <input type="text" placeholder="" class="form-control" id="task_subject"
                                       name="task_subject">
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.start_date")); ?> <span class="text-danger">*</span></label>
                                <input type="text" placeholder="" class="form-control dateFrom" id="start_date"
                                       name="start_date" readonly="">
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.deadline")); ?><span class="text-danger">*</span></label>
                                <input type="text" placeholder="" class="form-control dateTo" id="end_date"
                                       name="end_date" readonly="">
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.select_status")); ?>: <span class="text-danger">*</span></label>
                                <select class="form-control" id="project_status_id" name="project_status_id">
                                    <option value="">Select status</option>
                                    <?php $__currentLoopData = LogActivity::getTaskStatusList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.priority")); ?> <span class="text-danger">*</span></label>
                                <select class="form-control" id="priority" name="priority">
                                    <option value=""><?php echo e(__("t.select_priority")); ?></option>
                                    <?php $__currentLoopData = LogActivity::getTaskPriorityList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key); ?>"
                                        ><?php echo e($val); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.assign_to")); ?><span class="text-danger">*</span></label>

                                <select multiple class="form-control" id="assigned_to" name="assigned_to[]">
                                    <option value=""><?php echo e(__("t.select_user")); ?></option>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($val->id); ?>"><?php echo e($val->first_name.' '.$val->last_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.related_to")); ?></label>
                                <select class="form-control selct2-width-100" id="related" name="related">
                                    <option value=""><?php echo e(__("t.nothing_selected")); ?></option>
                                    <option value="case"><?php echo e(__("t.case")); ?></option>
                                    <option value="other"><?php echo e(__("t.other")); ?></option>
                                </select>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12 form-group task_selection hide">
                                <label for="fullname"><?php echo e(__("t.case")); ?></label>
                                <select class="form-control selct2-width-100" id="related_id" name="related_id">
                                    <option value=""><?php echo e(__("t.select_user")); ?></option>

                                </select>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.description")); ?>:</label>
                                <textarea class="form-control" id="task_description"
                                          name="task_description"></textarea>
                            </div>
                        </div>

                        <div class="form-group pull-right">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <a class="btn btn-danger" href="<?php echo e(route('tasks.index')); ?>"><?php echo e(__("t.cancel")); ?></a>
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"
                                                                                 id="show_loader"></i>&nbsp;<?php echo e(__("t.save")); ?>

                                </button>
                            </div>
                        </div>


                    </div>
                </form>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <input type="hidden" name="select2Case"
           id="select2Case"
           value="<?php echo e(route('select2Case')); ?>">

    <input type="hidden" name="date_format_datepiker"
           id="date_format_datepiker"
           value="<?php echo e($date_format_datepiker); ?>">
    <script src="<?php echo e(asset('assets/admin/js/selectjs.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/task/task-validation.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>