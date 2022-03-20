<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Modal Header</h4>
</div>
<form method="post" class="" id="form_case_imp" name="form_case_imp">
    <input type="hidden" id="id" name="id" value="<?php echo e($case->id); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="modal-body">
        <div class="alert alert-danger change-cort-d" ></div>
        <div class="row">

            <div class="col-md-12">
                <div class="contct-info">
                    <div class="form-group">
                        <label class="discount_text"><?php echo e(__('t.case_priority')); ?> <span class="text-danger">*</span></label>
                        <select class="form-control" id="priority" name="priority">
                            <option value="High" <?php echo e((!empty($case) && $case->priority=='High')?'selected':''); ?>><?php echo e(__('t.high')); ?>

                            </option>
                            <option value="Medium"<?php echo e((!empty($case) && $case->priority=='Medium')?'selected':''); ?>>
                                <?php echo e(__('t.medium')); ?>

                            </option>
                            <option value="Low" <?php echo e((!empty($case) && $case->priority=='Low')?'selected':''); ?>><?php echo e(__('t.low')); ?></option>
                        </select>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                class="ik ik-x"></i><?php echo e(__('t.close')); ?>

        </button>

        <button type="submit" name="case_status_btn" class="btn btn-success waves-effect waves-light"><?php echo e(__('t.save')); ?> <i
                class="fa fa-spinner fa-spin hide" id="btn_loader"></i></button>

    </div>
</form>
<script src="<?php echo e(asset('assets/js/case/change-priority-validation.js')); ?>"></script>
