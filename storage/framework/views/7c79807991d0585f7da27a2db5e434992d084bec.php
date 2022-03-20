<?php $__env->startSection('title','Case Edit'); ?>


<?php $__env->startSection('content'); ?>

    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e(__('t.edit_case')); ?></h3>
        </div>

        <div class="title_right">
            <div class="form-group pull-right top_search">
                <a href="<?php echo e(route('case-running.index')); ?>" class="btn btn-primary">Back</a>

            </div>
        </div>
    </div>
    <!------------------------------------------------ ROW 1-------------------------------------------- -->


    <form method="post" name="add_case" id="add_case" action="<?php echo e(route('case-running.update',$case->id)); ?>" class="">


        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo e(__('t.client_details')); ?></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__('t.client')); ?> <span class="text-danger">*</span></label>
                                <select class="form-control" name="client_name" id="client_name">
                                    <option value=""><?php echo e(__('t.select_client')); ?></option>
                                    <?php $__currentLoopData = $client_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($list->id); ?>" <?php echo e(($list->id == $case->advo_client_id)?'selected':''); ?>><?php echo e($list->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <br><br>
                                <input type="radio" id="test1" name="position"
                                       value="Petitioner" <?php echo e((!empty($case) && $case->client_position=='Petitioner')?'checked':''); ?>>&nbsp;&nbsp;<?php echo e(__('t.petitioner')); ?>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="test2" name="position"
                                       value="Respondent" <?php echo e((!empty($case) && $case->client_position=='Respondent')?'checked':''); ?>>&nbsp;&nbsp;<?php echo e(__('t.respondent')); ?>

                            </div>
                        </div>


                        <div class="repeater">
                            <div data-repeater-list="parties_detail">
                                <?php $__currentLoopData = $parties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $party): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div data-repeater-item>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="contct-info">
                                                    <div class="form-group">
                                                        <label class="discount_text position_name"></label>
                                                        <input type="text" id="party_name" name="party_name"
                                                               data-msg-required="Please enter name."
                                                               class="form-control" value="<?php echo e($party->party_name); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="contct-info">
                                                    <div class="form-group">
                                                        <label class="discount_text position_advo"></label>
                                                        <input type="text" id="party_advocate" name="party_advocate"
                                                               data-msg-required="Please enter advocate name."
                                                               class="form-control" value="<?php echo e($party->party_advocate); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="contct-info">
                                                    <div class="form-group">
                                                        <div class="case-margin-top-23"></div>

                                                        <button type="button" data-repeater-delete type="button"
                                                                class="btn btn-danger waves-effect waves-light"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <button data-repeater-create type="button" value="Add New"
                                    class="btn btn-success waves-effect waves-light btn btn-success-edit" type="button">
                                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<?php echo e(__('t.add_more')); ?>

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
                        <h2>Case Detail</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Case No <span class="text-danger">*</span></label>
                                <input type="text" value="<?php echo e($case->case_number ?? ''); ?>" id="case_no" name="case_no"
                                       class="form-control">
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Case Type <span class="text-danger">*</span></label>
                                <select class="form-control" id="case_type" name="case_type"
                                        onchange="getCaseSubType(this.value);">
                                    <option value="">Select case type</option>
                                    <?php $__currentLoopData = $caseTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caseType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($caseType->id); ?>" <?php echo e((!empty($case) && $case->case_types==$caseType->id)?'selected':''); ?>><?php echo e($caseType->case_type_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Case Sub Type <span class="text-danger"></span></label>
                                <select class="form-control" id="case_sub_type" name="case_sub_type">
                                    <?php $__currentLoopData = $caseSubTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caseSubType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($caseSubType->id); ?>" <?php echo e((!empty($case) && $case->case_sub_type==$caseSubType->id)?'selected':''); ?>><?php echo e($caseSubType->case_type_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Stage of Case <span class="text-danger">*</span></label>
                                <select class="form-control" id="case_status" name="case_status">
                                    <option value="">Select case status</option>
                                    <?php $__currentLoopData = $caseStatuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caseStatus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($caseStatus->id); ?>"
                                                myvalue="<?php echo e($caseStatus->case_status_name); ?>" <?php echo e((!empty($case) && $case->case_status==$caseStatus->id)?'selected':''); ?>><?php echo e($caseStatus->case_status_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <br><br>
                                <input type="radio" id="test3" name="priority"
                                       value="High" <?php echo e((!empty($case) && $case->priority=='High')?'checked':''); ?>>&nbsp;&nbsp;High
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="test4" name="priority"
                                       value="Medium" <?php echo e((!empty($case) && $case->priority=='Medium')?'checked':''); ?>>&nbsp;&nbsp;Medium
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="test5" name="priority"
                                       value="Low" <?php echo e((!empty($case) && $case->priority=='Low')?'checked':''); ?>>&nbsp;&nbsp;Low
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Act <span class="text-danger">*</span></label>
                                <input type="text" id="act" name="act" class="form-control"
                                       value="<?php echo e($case->act ?? ''); ?>">
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Filing Number <span class="text-danger">*</span></label>
                                <input type="text" id="filing_number" name="filing_number" class="form-control"
                                       value="<?php echo e($case->filing_number); ?>">
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Filing date <span class="text-danger">*</span></label>
                                <input type="text" id="filing_date" name="filing_date"
                                       class="form-control datetimepickerfilingdate" readonly=""
                                       value="<?php echo e(date($date_format_laravel,strtotime($case->filing_date))); ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Registration Number <span class="text-danger">*</span></label>
                                <input type="text" id="registration_number" name="registration_number"
                                       class="form-control" value="<?php echo e($case->registration_number); ?>">
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Registration date <span class="text-danger">*</span></label>
                                <input type="text" id="filiregistration_dateng_date" name="registration_date"
                                       class="form-control datetimepickerregdate" readonly=""
                                       value="<?php echo e(date($date_format_laravel,strtotime($case->registration_date))); ?>">
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">First Hearing Date <span class="text-danger">*</span></label>
                                <input type="text" id="next_date" name="next_date"
                                       class="form-control datetimepickernextdate" readonly=""
                                       value="<?php echo e(date($date_format_laravel,strtotime($case->next_date))); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">CNR Number <span class="text-danger"></span></label>
                                <input type="text" value="<?php echo e($case->cnr_number); ?>" id="cnr_number" name="cnr_number"
                                       class="form-control">
                            </div>
                            <div class="col-md-9 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Description <span class="text-danger"></span></label>
                                <textarea id="description" name="description"
                                          class="form-control"><?php echo e($case->description ?? ''); ?></textarea>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>FIR Details</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Police Station <span class="text-danger"></span></label>
                                <input type="text" id="police_station" name="police_station" class="form-control"
                                       value="<?php echo e($case->police_station ?? ''); ?>">
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">FIR Number <span class="text-danger"></span></label>
                                <input type="text" value="<?php echo e($case->fir_number ?? ''); ?>" id="fir_number" name="fir_number"
                                       class="form-control">
                            </div>


                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">FIR Date <span class="text-danger"></span></label>
                                <input type="text" id="fir_date" name="fir_date"
                                       class="form-control datetimepickerregdate" readonly=""
                                       value="<?php if($case->fir_date!=null){?> <?php echo e(date($date_format_laravel,strtotime($case->fir_date))); ?> <?php } ?>">
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Court Detail</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Court no <span class="text-danger">*</span></label>
                                <input type="text" value="<?php echo e($case->court_no ?? ''); ?>" id="court_no" name="court_no"
                                       class="form-control">
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Court Type<span class="text-danger">*</span></label>
                                <select class="form-control" id="court_type" name="court_type"
                                        onchange="getCourt(this.value);">
                                    <option value="">Select court type</option>
                                    <?php $__currentLoopData = $courtTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courtType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($courtType->id); ?>" <?php echo e((!empty($case) && $case->court_type==$courtType->id)?'selected':''); ?>><?php echo e($courtType->court_type_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Court <span class="text-danger">*</span></label>
                                <select class="form-control" id="court_name"
                                        name="court_name"> <?php $__currentLoopData = $courts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $court): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($court->id); ?>" <?php echo e((!empty($case) && $case->court==$court->id)?'selected':''); ?>><?php echo e($court->court_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Judge Type <span class="text-danger">*</span></label>
                                <select class="form-control select2" id="judge_type" name="judge_type">
                                    <option value="">Select judge type</option>
                                    <?php $__currentLoopData = $judges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $judge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($judge->id); ?>" <?php echo e((!empty($case) && $case->judge_type==$judge->id)?'selected':''); ?>><?php echo e($judge->judge_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Judge Name <span class="text-danger"></span></label>
                                <input type="text" id="judge_name" name="judge_name" value="<?php echo e($case->judge_name ?? ''); ?>"
                                       class="form-control">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Remarks <span class="text-danger"></span></label>
                                <textarea id="remarks" name="remarks"
                                          class="form-control"><?php echo e($case->remark ?? ''); ?></textarea>

                            </div>
                        </div>


                    </div>
                </div>

            </div>


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Task Assign</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">


                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname">Users</label>
                                <select multiple class="form-control" id="assigned_to" name="assigned_to[]">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($val->id); ?>"

                                                <?php if(in_array($val->id, $user_ids)): ?>
                                                selected=""

                                            <?php endif; ?>
                                        ><?php echo e($val->first_name.' '.$val->last_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
            <div class="form-group pull-right">
                <div class="col-md-12 col-sm-6 col-xs-12">


                    <a class="btn btn-danger" href="<?php echo e(route('case-running.index')); ?>">Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save" id="show_loader"></i>&nbsp;Save
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