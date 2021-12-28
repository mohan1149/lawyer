@extends('admin.layout.app')
@section('title','Case List')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_content">
                    @include('admin.case.view.card_header')
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>{{__("t.no")}}.</th>
                            <th>{{__("t.registration_no")}}</th>
                            <th>{{__("t.transfer_date")}}</th>
                            <th>{{__("t.from_courtnumber_and_judge")}}</th>
                            <th>{{__("t.to_courtnumber_and_judge")}}</th>


                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>1089/2016</td>
                            <td>23-06-2016</td>
                            <td></td>
                            <td></td>

                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
