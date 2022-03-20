<div class="modal fade" id="addtag" role="dialog" aria-labelledby="addcategory" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <form action="<?php echo e(route('expense-type.store')); ?>" method="POST" id="tagForm" name="tagForm">
            <?php echo csrf_field(); ?>
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel2"><?php echo e(__("t.add_expense_type")); ?></h4>
                </div>

                <div class="modal-body">
                    <div id="form-errors"></div>
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <label for="case_subtype"><?php echo e(__("t.name")); ?> <span class="text-danger">*</span></label>
                            <input type="text" placeholder="" class="form-control" id="name" name="name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <label for="case_subtype"><?php echo e(__("t.description")); ?> </label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                    </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                            class="ik ik-x"></i><?php echo e(__("t.close")); ?>

                    </button>
                    <button type="submit" class="btn btn-success shadow"><i class="fa fa-save ik ik-check-circle"
                                                                            id="cl">
                        </i> <?php echo e(__("t.save")); ?>

                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
<input type="hidden" name="token-value"
       id="token-value"
       value="<?php echo e(csrf_token()); ?>">

<input type="hidden" name="common_check_exist"
       id="common_check_exist"
       value="<?php echo e(url('common_check_exist')); ?>">

<script src="<?php echo e(asset('assets/js/expense/expense-type-validation.js')); ?>"></script>


