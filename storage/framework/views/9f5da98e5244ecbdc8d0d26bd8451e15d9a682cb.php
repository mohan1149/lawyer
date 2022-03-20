<?php $__env->startSection('title','Case Create'); ?>


<?php $__env->startSection('content'); ?>

    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e(__('t.add_case')); ?></h3>
        </div>

        <div class="title_right">
            <div class="form-group pull-right top_search">
                <a href="<?php echo e(route('case-running.index')); ?>" class="btn btn-primary"><?php echo e(__('t.back')); ?></a>

            </div>
        </div>
    </div>
    <!------------------------------------------------ ROW 1-------------------------------------------- -->


    <form method="post" name="add_case" id="add_case" action="<?php echo e(route('case-running.store')); ?>" class="">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo e(__('t.client_detail')); ?></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <strong><?php echo e(__("t.input_error")); ?></strong> <br><br>
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.client")); ?> <span class="text-danger">*</span></label>
                                <select class="form-control" name="client_name" id="client_name">
                                    <option value=""><?php echo e(__("t.select_client")); ?></option>
                                    <?php $__currentLoopData = $client_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($list->id); ?>"><?php echo e($list->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <br><br>
                                <input type="radio" id="test1" name="position" value="Petitioner" checked>&nbsp;&nbsp;<?php echo e(__("t.petitioner")); ?>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="test2" name="position" value="Respondent">&nbsp;&nbsp;<?php echo e(__("t.respondent")); ?>

                            </div>
                        </div>


                        <div class="repeater">
                            <div data-repeater-list="parties_detail">
                                <div data-repeater-item>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="discount_text "> <b class="position_name"><?php echo e(__("t.respondent_name")); ?></b><span class="text-danger">*</span></label>
                                                <input type="text" id="party_name" name="party_name"data-msg-required="<?php echo e(__('t.enter_name')); ?>"
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-5">

                                            <div class="form-group">
                                                <label class="discount_text "><b class="position_advo"><?php echo e(__("t.respondent_advocate")); ?>

                                                        </b><span class="text-danger">*</span></label>
                                                <input type="text" id="party_advocate" name="party_advocate"
                                                       data-msg-required="<?php echo e(__('t.enter_advocate_name')); ?>"
                                                       class="form-control">
                                            </div>


                                        </div>

                                        <div class="col-md-1">

                                            <div class="form-group">

                                                <div class="case-margin-top-23"></div>
                                                <button type="button" data-repeater-delete type="button"
                                                        class="btn btn-danger waves-effect waves-light"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </div>


                                        </div>


                                    </div>

                                    <br>
                                </div>
                            </div>
                            <button data-repeater-create type="button" value="Add New"
                                    class="btn btn-success waves-effect waves-light btn btn-success-edit" type="button">
                                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<?php echo e(__("t.add_more")); ?>

                            </button>
                        </div>


                    </div>
                </div>

            </div>

        </div>
        <!------------------------------------------------------- End ROw --------------------------------------------->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo e(__('t.case_details')); ?></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group highlight_input">
                                <label for="case_level"><?php echo e(__("t.case_level")); ?>**</label>
                                <select name="case_level" class="form-control" id="level_controller" required>
                                    <option value="NULL">------ </option>
                                    <option value="police"><?php echo e(__('t.police')); ?></option>
                                    <option value="prosecution"><?php echo e(__('t.prosecution')); ?></option>
                                    <option value="first-degree"><?php echo e(__('t.first-degree')); ?></option>
                                    <option value="resumption"><?php echo e(__('t.resumption')); ?></option>
                                    <option value="excellence"><?php echo e(__('t.excellence')); ?></option>
                                    <option value="expert"><?php echo e(__('t.expert')); ?></option>
                                    <option value="shapes"><?php echo e(__('t.shapes')); ?></option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="code_number"><?php echo e(__('t.code_num')); ?><span class="text-danger">*</span></label>
                                <input type="text" id="code_number" name="registration_number" class="form-control" value="<?php echo e(time()); ?>">
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.filling_number")); ?> <span class="text-danger">*</span></label>
                                <input type="text" id="filing_number" name="filing_number" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="case_no"><?php echo e(__('t.case_no')); ?><span class="text-danger">*</span></label>
                                <input type="text" id="case_no" name="case_no" class="form-control" >
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__('t.case_type')); ?> <span class="text-danger">*</span></label>
                                <select class="form-control" id="case_type" name="case_type"
                                        onchange="getCaseSubType(this.value);">
                                    <option value=""><?php echo e(__("t.select_case_type")); ?></option>
                                    <?php $__currentLoopData = $caseTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caseType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($caseType->id); ?>"><?php echo e($caseType->case_type_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.case_sub_type")); ?> <span class="text-danger"></span></label>
                                <select class="form-control" id="case_sub_type" name="case_sub_type"></select>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group police hidden_field">
                                <label for="police_station"><?php echo e(__("t.police_station")); ?></label>
                                <input type="text" name="ps_station" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group police hidden_field">
                                <label for="officer"><?php echo e(__("t.officer")); ?></label>
                                <input type="text" name="po_officer" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group police hidden_field">
                                <label for="reg_date"><?php echo e(__("t.reg_date")); ?></label>
                                <input type="date" name="reg_date" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group police hidden_field">
                                <label for="decision"><?php echo e(__("t.decision")); ?></label>
                                <input type="text" name="po_decision" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group police hidden_field">
                                <label for="dec_date"><?php echo e(__("t.dec_date")); ?></label>
                                <input type="date" name="po_dec_date" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group police hidden_field">
                                <label for="rel_date"><?php echo e(__("t.rel_date")); ?></label>
                                <input type="date" name="po_rel_date" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group police hidden_field">
                                <label for="warranty"><?php echo e(__("t.warranty")); ?></label>
                                <input type="text" name="po_warranty" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group police hidden_field">
                                <label for="date_payment"><?php echo e(__("t.date_payment")); ?></label>
                                <input type="date" name="po_date_payment" class="form-control">
                            </div>
                        
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group pros hidden_field">
                            <label for="pros_type"><?php echo e(__("t.pros_type")); ?></label>
                            <input type="text" name="pros_type" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group pros hidden_field">
                            <label for="officer"><?php echo e(__("t.officer")); ?></label>
                            <input type="text" name="pro_officer" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group pros hidden_field">
                            <label for="summon"><?php echo e(__("t.summon")); ?></label>
                            <input type="date" name="summon" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group pros hidden_field">
                            <label for="summon_next"><?php echo e(__("t.summon_next")); ?></label>
                            <input type="date" name="summon_next" class="form-control">
                        </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group pros hidden_field">
                                <label for="decision"><?php echo e(__("t.decision")); ?></label>
                                <input type="text" name="pro_decision" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group pros hidden_field">
                                <label for="dec_date"><?php echo e(__("t.dec_date")); ?></label>
                                <input type="date" name="pro_dec_date" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group pros hidden_field">
                                <label for="rel_date"><?php echo e(__("t.rel_date")); ?></label>
                                <input type="date" name="pro_rel_date" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group pros hidden_field">
                                <label for="warranty"><?php echo e(__("t.warranty")); ?></label>
                                <input type="text" name="pro_warranty" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group pros hidden_field">
                                <label for="date_payment"><?php echo e(__("t.date_payment")); ?></label>
                                <input type="date" name="pro_date_payment" class="form-control">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.case_stage")); ?> <span class="text-danger">*</span></label>
                                <select class="form-control" id="case_status" name="case_status">
                                    <option value=""><?php echo e(__("t.select_case_status")); ?></option>
                                    <?php $__currentLoopData = $caseStatuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caseStatus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($caseStatus->id); ?>"><?php echo e($caseStatus->case_status_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <br><br>
                                <input type="radio" id="test3" name="priority" value="High">&nbsp;&nbsp;<?php echo e(__("t.high")); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="test4" name="priority" value="Medium" checked>&nbsp;&nbsp;<?php echo e(__("t.medium")); ?>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="test5" name="priority" value="Low">&nbsp;&nbsp;<?php echo e(__("t.low")); ?>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.act")); ?> <span class="text-danger">*</span></label>
                                <input type="text" id="law_num" name="act" class="form-control">
                            </div>
                            
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.filling_date")); ?> <span class="text-danger">*</span></label>
                                <input type="text" id="filing_date" name="filing_date"
                                       class="form-control datetimepickerfilingdate" readonly="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.registration_date")); ?> <span class="text-danger">*</span></label>
                                <input type="text" id="filiregistration_dateng_date" name="registration_date"
                                       class="form-control datetimepickerregdate" readonly="">
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.first_hearing")); ?> <span class="text-danger">*</span></label>
                                <input type="text" id="next_date" name="next_date"
                                       class="form-control datetimepickernextdate" readonly="">
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__("t.description")); ?>  <span class="text-danger"></span></label>
                                <textarea id="description" name="description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            
        </div>
        <div class="row">
            
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>   <?php echo e(__("t.assign_task")); ?></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"> <?php echo e(__("t.users")); ?></label>
                                <select multiple class="form-control" id="assigned_to" name="assigned_to[]">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($val->id); ?>"><?php echo e($val->first_name.' '.$val->last_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group pull-right">
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <a class="btn btn-danger" href="<?php echo e(route('case-running.index')); ?>"> <?php echo e(__("t.cancel")); ?></a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save" id="show_loader"></i>&nbsp;<?php echo e(__("t.save")); ?>

                    </button>
                </div>
            </div>
            <br>
        </div>
    </form>
    <input type="hidden" name="date_format_datepiker"
           id="date_format_datepiker"
           value="<?php echo e($date_format_datepiker); ?>">
    <input type="hidden" name="getCaseSubType"
           id="getCaseSubType"
           value="<?php echo e(url('getCaseSubType')); ?>">
    <input type="hidden" name="getCourt"
           id="getCourt"
           value="<?php echo e(url('getCourt')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/case/case-add-validation.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/repeter/repeater.js')); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>