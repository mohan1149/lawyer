<?php $__env->startSection('title',__("t.case_levels")); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="clearfix"></div>
        <div class="container">
            <h1 class="alert alert-info jumbo"><?php echo e(__("t.level".$case->case_level)); ?></h1>
        </div>
        <div class="panel panel-info">
            <div style="padding: 10px">
                <div class="row">
                    <h2 style="padding: 25px"><?php echo e(__("t.case_details")); ?></h2>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <td><?php echo e(__("t.case_type")); ?></td>
                                <td><?php echo e($case->case_type_name); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.filling_no")); ?></td>
                                <td><?php echo e($case->filing_number); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.filling_date")); ?></td>
                                <td><?php echo e($case->filing_date); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.registration_number")); ?></td>
                                <td><?php echo e($case->registration_number); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.registration_date")); ?></td>
                                <td><?php echo e($case->registration_date); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.client")); ?></td>
                                <td><?php echo e($case->first_name.' '.$case->last_name); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <td><?php echo e(__("t.first_hearing")); ?></td>
                                <td><?php echo e($case->first_hearing_date); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.next_hearing_date")); ?></td>
                                <td><?php echo e($case->next_date); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.case_status")); ?></td>
                                <td><?php echo e($case->case_status_name); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.court")); ?></td>
                                <td><?php echo e($case->court_name); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.judge_name")); ?></td>
                                <td><?php echo e($case->judge_name); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.againt")); ?></td>
                                <td><?php echo e($case->party_name); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
        <br>
        <div class="panel panel-info">
            <div style="padding: 10px">
                <form action="/admin/level/save/<?php echo e(request('id')); ?>" method="post">
                    <input type="hidden" name="level" value="<?php echo e($case->case_level); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <h2 style="padding: 25px"><?php echo e(__("t.level_details")); ?></h2>
                        <a style="margin-left:25px" class="btn btn-info" href="/admin/case/level/history/<?php echo e(request('id')); ?>"><?php echo e(__("t.level_history")); ?></a>
                        <br>
                        <div class="col-md-6">
                            <table class="table">
                                    <?php if($case->case_level == 1): ?>
                                        <tr>
                                            <td><?php echo e(__("t.police_station")); ?></td>
                                            <td><?php echo e($case->police_station); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__("t.fir_number")); ?></td>
                                            <td><?php echo e($case->fir_number); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__("t.fir_date")); ?></td>
                                            <td><?php echo e($case->fir_date); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if($case->case_level != 1): ?>
                                        <tr>
                                            <td><?php echo e(__("t.floor")); ?></td>
                                            <?php if($case->floor == ""): ?>
                                                <td> <input type="text" name="floor" class="form-control"> </td>
                                            <?php else: ?>
                                                <td><?php echo e($case->floor); ?></td>
                                            <?php endif; ?>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__("t.room")); ?></td>
                                            <?php if($case->room == ""): ?>
                                                <td> <input type="text" name="room" class="form-control"> </td>
                                            <?php else: ?>
                                                <td><?php echo e($case->room); ?></td>
                                            <?php endif; ?>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__("t.secretary")); ?></td>
                                            <?php if($case->secretary == ""): ?>
                                                <td> <input type="text" name="secretary" class="form-control"> </td>
                                            <?php else: ?>
                                                <td><?php echo e($case->secretary); ?></td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endif; ?>
                                    <tr>
                                        <td><?php echo e(__("t.prev_request")); ?></td>
                                        <?php if($case->prev_request == ""): ?>
                                            <td>
                                                <textarea name="prev_request" class="form-control" cols="30" rows="10"></textarea>
                                            </td>
                                        <?php else: ?>
                                            <td><?php echo e($case->prev_request); ?></td>
                                        <?php endif; ?>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__("t.pre_response")); ?></td>
                                        <?php if($case->pre_response == ""): ?>
                                            <td>
                                                <textarea name="pre_response" class="form-control" cols="30" rows="10"></textarea>
                                            </td>
                                        <?php else: ?>
                                            <td><?php echo e($case->prev_request); ?></td>
                                        <?php endif; ?>
                                    </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <?php if($case->case_level == 5): ?>
                                    <tr>
                                        <td><?php echo e(__("t.expert")); ?></td>
                                        <?php if($case->expert == ""): ?>
                                            <td><input type="text" name="expert" class="form-control"></td>
                                        <?php else: ?>
                                        <td><?php echo e($case->expert); ?></td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endif; ?>
                                <tr>
                                    <td><?php echo e(__("t.next_request")); ?></td>
                                    <?php if($case->next_request == ""): ?>
                                        <td>
                                            <textarea name="next_request" class="form-control" cols="30" rows="10"></textarea>
                                        </td>
                                    <?php else: ?>
                                        <td><?php echo e($case->prev_request); ?></td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <td><?php echo e(__("t.next_response")); ?></td>
                                    <?php if($case->next_response == ""): ?>
                                        <td>
                                            <textarea name="next_response" class="form-control" cols="30" rows="10"></textarea>
                                        </td>
                                    <?php else: ?>
                                        <td><?php echo e($case->prev_request); ?></td>
                                    <?php endif; ?>
                                </tr>
                                
                            </table>
                        </div>
                        <div class="col-md-12">
                            <h2><?php echo e(__("t.notes")); ?></h2>
                            <?php if($case->level_notes == ""): ?>
                                <textarea name="notes" class="form-control" cols="30" rows="10"></textarea>
                            <?php else: ?>
                                <?php echo e($case->level_notes); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                    <div style="margin: 10px">
                        <input class="btn btn-primary" type="submit" value=<?php echo e(__("t.save_level")); ?>>
                    </div>
                </form>
                <form action="/admin/case/level-up" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="case_id" value="<?php echo e(request('id')); ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="up_level"><?php echo e(__("t.level")); ?></label>
                                <select name="up_level" id="up_level" class="form-control">
                                    <option value="1"><?php echo e(__("t.level1")); ?></option>
                                    <option value="2"><?php echo e(__("t.level2")); ?></option>
                                    <option value="3"><?php echo e(__("t.level3")); ?></option>
                                    <option value="4"><?php echo e(__("t.level4")); ?></option>
                                    <option value="5"><?php echo e(__("t.level5")); ?></option>
                                    <option value="6"><?php echo e(__("t.level6")); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 10px">
                        <input class="btn btn-primary" type="submit" value="<?php echo e(__("t.change_level")); ?>">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>