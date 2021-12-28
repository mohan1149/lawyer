@extends('admin.layout.app')
@section('title','Vendor')
@section('content')

<div class="x_panel">
   
    <div class="x_content">

      <section class="content invoice">
       
        <div class="row"><br>
          <div class="col-xs-12 invoice-header" align="center">
            <h1>{{__("t.expense")}}</h1>
          </div>
        </div>
        
        <div class="row invoice-info">
          <div class="col-sm-4">
            <div class="row">
              <div class="col-md-6 form-group">
                 <label for="vendor">{{__("t.vendor")}} <span class="text-danger">*</span></label>
                  <select class="form-control">
                    <option>{{__("t.select_vendor")}}</option>
                    <option>PGVCL</option>
                    <option>Fname Lname</option>
                  </select><br>
                  <label for="billed_from">{{__("t.billed_from")}}<span class="text-danger">*</span></label><br>
                  <p>PGVCL</p>
                  <p>804,Rivera wave</p>
                  <p>1235649870</p>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
          </div>
          
          <div class="col-sm-4 form-horizontal form-label-left" >
            
                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-3 col-xs-12">{{__("t.bill_no")}}: <span class="text-danger">*</span></label>
                  <div class="col-md-7 col-sm-9 col-xs-12">
                    <input type="text" placeholder="" class="form-control">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-3 col-xs-12">{{__("t.bill_date")}}: <span class="text-danger">*</span></label>
                  <div class="col-md-7 col-sm-9 col-xs-12">
                    <input type="text" placeholder="" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-3 col-xs-12">{{__("t.bill_due_date")}}: <span class="text-danger">*</span></label>
                  <div class="col-md-7 col-sm-9 col-xs-12">
                    <input type="text" placeholder="" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-3 col-xs-12">{{__("t.tax_type")}}: <span class="text-danger">*</span></label>
                  <div class="col-md-7 col-sm-9 col-xs-12">
                    <p>IGST</p>
                  </div>
                </div>
          </div>
         
        </div><br><br>
      
        <div class="row">
          <div class="col-xs-12 table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 20%;">{{__("t.Items")}}</th>
                    <th style="width: 20%;">{{__("t.description")}} </th>
                    <th style="width: 10%;">{{__("t.qty")}}</th>
                    <th style="width: 15%;">{{__("t.rate")}}</th>
                    <th style="width: 15%;">{{__("t.tax_per")}}(%)</th>
                    <th style="width: 10%;">{{__("t.tax")}}(₹)</th>
                    <th style="width: 20%;">{{__("t.amount")}}</th>
                    <th style="width: 10%;">{{__("t.action")}}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <select class="form-control">
                        <option>{{__("t.select_category")}}</option>
                        <option>Test</option>
                      </select>
                    </td>
                    <td>
                      <input type="text" placeholder="" value="test" class="form-control">
                    </td>
                    <td>
                      <input type="text" placeholder="" value="1" class="form-control">
                    </td>
                    <td>
                      <input type="text" placeholder="" value="500" class="form-control">
                    </td>
                    <td>
                      <select class="form-control">
                        <option>IGST 0%</option>
                        <option>IGST 28%</option>
                        <option>IGST 18%</option>
                        <option>IGST 12%</option>
                        <option>IGST 5%</option>
                      </select>
                    </td>
                    <td>
                      <label>90</label>
                    </td>
                    <td>
                      <input type="text" placeholder="" class="form-control" value="500" readonly>
                    </td>
                    <td>
                     <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <select class="form-control">
                        <option>{{__("t.select_category")}}</option>
                        <option>Test</option>
                      </select>
                    </td>
                    <td>
                      <input type="text" placeholder="" value="test" class="form-control">
                    </td>
                    <td>
                      <input type="text" placeholder="" value="1" class="form-control">
                    </td>
                    <td>
                      <input type="text" placeholder="" value="1000" class="form-control">
                    </td>
                    <td>
                      <select class="form-control">
                        <option>IGST 0%</option>
                        <option>IGST 28%</option>
                        <option>IGST 18%</option>
                        <option>IGST 12%</option>
                        <option>IGST 5%</option>
                      </select>
                    </td>
                    <td>
                      <label>120.00</label>
                    </td>
                    <td>
                      <input type="text" placeholder="" class="form-control" value="1000" readonly>
                    </td>
                    <td>
                     <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="8">
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>{{__("t.add_more")}}</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <p style="color: red;">* Mandatory fields</p>
          </div>
         
        </div>

        <div class="row">
                        
          <div class="col-xs-7">
            <label for="note">{{__("t.note")}}</label>
            <textarea class="form-control" rows="3" placeholder=""></textarea>
          </div>
       
          <div class="col-xs-5">
           
            <div class="table-responsive">
              <table class="table" align="right" style="margin-right: 30px;"> 
                <tbody>
                  <tr style="font-size: 17px;">
                    <th style="width: 70%; text-align: right;">{{__("t.subtotal")}}</th>
                    <td align="right">1500</td>
                  </tr>
                  <tr>
                    <th style="text-align: right;">IGST @ 30 % on 210</th>
                    <td align="right">210</td>
                  </tr>
                  <tr style="font-size: 17px;">
                    <th style="text-align: right;">{{__("t.total")}}</th>
                    <td align="right"><input type="text" placeholder="" class="form-control" value="1000" readonly style="text-align: right;"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
         
        </div>
     
      </section>
    </div>
</div>

@endsection