<?php $__env->startSection('title',__("t.add_time")); ?>
<?php $__env->startSection('content'); ?>

    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">
                        <form action="/admin/judge-time-low" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <h2><?php echo e(__("t.add_judgment_time_low")); ?></h2>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="days"><?php echo e(__("t.case_level")); ?></label>
                                        <select name="case_level" class="form-control">
                                            <option value="police"><?php echo e(__('t.police')); ?></option>
                                            <option value="prosecution"><?php echo e(__('t.prosecution')); ?></option>
                                            <option value="first-degree"><?php echo e(__('t.first-degree')); ?></option>
                                            <option value="resumption"><?php echo e(__('t.resumption')); ?></option>
                                            <option value="excellence"><?php echo e(__('t.excellence')); ?></option>
                                            <option value="expert"><?php echo e(__('t.expert')); ?></option>
                                            <option value="shapes"><?php echo e(__('t.shapes')); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="case_type"><?php echo e(__("t.case_type")); ?></label>
                                        <select name="case_type" class="form-control">
                                            <?php $__currentLoopData = $case_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $case_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>"><?php echo e($case_type); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="days"><?php echo e(__("t.days")); ?></label>
                                        <input type="number" name="days" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <br>
                                        <button class="btn btn-primary" type="sumbit"><?php echo e(__("t.add")); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>