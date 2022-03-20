<?php $__env->startSection('title',__("t.level_history")); ?>
<?php $__env->startSection('content'); ?>
    <div class="container" style="padding: 15px;margin:15px;margin-top:50px">
        <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-info">
                <div class="panel-heading" style="text-align: center;font-size:20px">
                    <h2 style="text-transform: uppercase">
                        <?php echo e($item->case_level.' # '.$item->hid); ?>

                    </h2>
                </div>
                <div class="panel-body">
                    <div class="container">
                        <table class="table">
                            <tr>
                                <td><?php echo e(__("t.judcial_dept")); ?></td>
                                <td><?php echo e($item->judcial_dept); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.floor")); ?></td>
                                <td><?php echo e($item->floor); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.room")); ?></td>
                                <td><?php echo e($item->room); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.court_secretary")); ?></td>
                                <td><?php echo e($item->court_secretary); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.last_hearing")); ?></td>
                                <td><?php echo e($item->last_hearing); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.next_hearing")); ?></td>
                                <td><?php echo e($item->next_hearing); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.last_requirements")); ?></td>
                                <td><?php echo e($item->last_requirements); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.current_requirements")); ?></td>
                                <td><?php echo e($item->current_requirements); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.hearing_statement")); ?></td>
                                <td><?php echo e($item->hearing_statement); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <h2 class="glyphicon glyphicon-arrow-down" aria-hidden="true" style="display:flex;justify-content: center"></h2>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>