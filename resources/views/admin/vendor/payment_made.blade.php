 <div class="modal fade bs-example-modal-sm" id="addpayment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-mg">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel2">{{__("t.add_payment")}}</h4>
            </div>
            <div class="modal-body">
             
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  <label for="amount">{{__("t.amount")}} <span class="text-danger">*</span></label>
                  <input type="text" placeholder="" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  <label for="receipt_date">{{__("t.receipt_date")}} <span class="text-danger">*</span></label>
                  <input type="text" placeholder="" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  <label for="payment_method">{{__("t.payment_method")}} <span class="text-danger">*</span></label>
                  <select class="form-control">
                    <option>{{__("t.select_payment_method")}}d</option>
                    <option>Cash</option>
                    <option>Cheque</option>
                    <option>Net Banking</option>
                    <option>Other</option>
                  </select>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  <label for="referance_number">{{__("t.reference_number")}}</label>
                  <input type="text" placeholder="" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  <label for="note">{{__("t.note")}}</label>
                  <textarea type="text" placeholder="" class="form-control"></textarea>
              </div>
            </div>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">>{{__("t.close")}}</button>
              <button type="button" class="btn btn-primary">{{__("t.save_changes")}}</button>
            </div>

          </div>
        </div>
      </div>