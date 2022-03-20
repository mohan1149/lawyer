<link rel="stylesheet" href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
<?php $__env->startSection('title',__("t.notices")); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <h2><?php echo e(__('t.notices')); ?></h2>
                    <div class="x_content">
                        <table id="slidersTable" class="table responsive responsive-table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__("t.case_number")); ?></th>
                                    <th><?php echo e(__("t.client")); ?></th>
                                    <th><?php echo e(__("t.against")); ?></th>
                                    <th><?php echo e(__("t.status")); ?></th>
                                    <th data-orderable="false" class="text-center"><?php echo e(__("t.action")); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($case->case_number); ?></td>
                                        <td><?php echo e($case->first_name.' '.$case->last_name); ?></td>
                                        <td><?php echo e($case->party_name); ?></td>
                                        <td><?php echo e($case->notice_status == 0 ? __('t.not_sent') : __('t.sent')); ?></td>
                                        <td>
                                            <?php if($case->notice_status == 0 ): ?>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                                <?php echo e(__("t.mark_sent")); ?>

                                            </button>
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__("t.notice_send")); ?></h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      
                                                      <form action="/admin/notices/update" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="case_id" value="<?php echo e($case->id); ?>">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group" style="width: 100%">
                                                                    <label for="notice_date"><?php echo e(__("t.notice_date")); ?></label>
                                                                    <br>
                                                                    <input required style="width: 100%" type="date" class="form-control" name="notice_date" id="notice_date">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group" style="width: 100%">
                                                                    <label for="notice_notes"><?php echo e(__("t.notes")); ?></label>
                                                                    <br>
                                                                    <textarea required style="width: 100%" class="form-control" name="notice_notes" id="notice_notes" cols="30" rows="10"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div 
                                                        style="padding: 20px">
                                                            <input type="submit" class="btn btn-primary" value="<?php echo e(__("t.save")); ?>">
                                                        </div>
                                                    </form>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <?php else: ?>
                                                <a class="btn btn-primary" href="/admin/notices/view/<?php echo e($case->id); ?>"><?php echo e(__("t.view")); ?></a>
                                            <?php endif; ?>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#slidersTable').DataTable({
        columnDefs: [
            {
                targets: 4,
                orderable: false,
                searchable: false,
            },
        ],
    });
} );
</script>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>