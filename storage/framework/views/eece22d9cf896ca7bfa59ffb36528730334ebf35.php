<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(__("t.case_roll")); ?></title>
    <style>
        tr{
            border-bottom:2px solid gray;
        }
        td{
            border-bottom:2px solid gray;
        }
    </style>
</head>
<body>
    <div>
        <img src="https://fatmashaddadlawoffice.com/logo.png" width="100px" alt="">
    </div>
    <div>
        <br>
        <h2 style="text-align:center;"> <?php echo e(__("t.case_roll")); ?></h2>
	    <hr>
    </div>
    <div>
        <table id="slidersTable" class="table responsive responsive-table">
            <thead>
                <tr>
                    <th><?php echo e(__("t.case_number")); ?></th>
                    <th><?php echo e(__("t.priority")); ?></th>
                    <th><?php echo e(__("t.client_name")); ?></th>
                    <th><?php echo e(__("t.next_hearing")); ?></th>
                    <th><?php echo e(__("t.client_position")); ?></th>
                    <th><?php echo e(__("t.case_level")); ?></th>
                    <th><?php echo e(__("t.exe_status")); ?></th>
                    <th><?php echo e(__("t.notice_status")); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($case->case_number); ?></td>
                        <td><?php echo e($case->priority); ?></td>
                        <td><?php echo e($case->first_name.' '.$case->last_name); ?></td>
                        <td><?php echo e($case->next_date); ?></td>
                        <td><?php echo e($case->client_position); ?></td>
                        <td><?php echo e(__("t.".$case->case_level)); ?></td>
                        <td><?php echo e($case->exe_status == 0 ? __('t.not_done') : __('t.done')); ?></td>
                        <td><?php echo e($case->notice_status == 0 ? __('t.not_sent') : __('t.sent')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>