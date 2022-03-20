<?php $__env->startSection('title','Case History'); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_content">
                    <div class="x_title">
                        <h2> <?php echo e(__("t.case")); ?></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>

                                <a class="card-header-color "
                                   href="<?php echo e(url('admin/case-running-download/'.$case_id.'/download')); ?>"
                                   title="Download case file"><i class="fa fa-download fa-2x"></i></a>
                            </li>
                            <li>
                                <a class="card-header-color  "
                                   href="<?php echo e(url('admin/case-running-download/'.$case_id.'/print')); ?>"
                                   title="Print case file" target="_blank"><i class="fa fa-print fa-2x"></i></a>
                            </li>


                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <br>
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation"
                                class="<?php if(Request::segment(2)=='case-running'): ?>active @ else <?php endif; ?>"><a
                                    href="<?php echo e(route('case-running.show',$case_id)); ?>"><?php echo e(__("t.details")); ?></a>
                            </li>
                            <li role="presentation"
                                class="<?php if(Request::segment(2)=='case-history'): ?>active @ else <?php endif; ?>"><a
                                    href="<?php echo e(url( 'admin/case-history/'.$case_id)); ?>"><?php echo e(__("t.history")); ?></a>

                            </li>
                            <li role="presentation" class="<?php if(Request::segment(4)=='transfer'): ?>active @ else <?php endif; ?>"><a
                                    href="<?php echo e(url('admin/case-transfer/'.$case_id)); ?>"><?php echo e(__("t.transfer")); ?></a>
                            </li>
                        </ul>

                    </div>
                    <table id="case_history_list" class="table row-border" >
                        <thead>
                        <tr>

                            <th width="16%"><?php echo e(__("t.registration_no")); ?></th>
                            <th width="23%"><?php echo e(__("t.judge")); ?></th>
                            <th width="15%"><?php echo e(__("t.business_on_date")); ?></th>
                            <th width="14%"><?php echo e(__("t.hearing_date")); ?></th>
                            <th width="35%"><?php echo e(__("t.purpose_of_hearing")); ?></th>
                            <th width="2%" class="text-center"><?php echo e(__("t.remarks")); ?></th>
                        </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>


    </div>

    <div id="load-modal"></div>

    <div id="remarkModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">

                </div>
            </div>

        </div>
    </div>
    <input type="hidden" name="token-value"
           id="token-value"
           value="<?php echo e(csrf_token()); ?>">
    <input type="hidden" name="case_ids"
           id="case_ids"
           value="<?php echo e($case_id); ?>">
    <input type="hidden" name="allCaseHistoryList"
           id="allCaseHistoryList"
           value="<?php echo e(url('admin/allCaseHistoryList')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/case/case-history-datatable.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>