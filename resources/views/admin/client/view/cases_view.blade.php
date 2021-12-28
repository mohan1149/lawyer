@extends('admin.layout.app')
@section('title','Client Cases')
@section('content')
    <div class="page-title">
        <div class="title_left">
            <h4>Client Name : {{$name}} </h4>
        </div>
        <div class="pull-right">
            <h4> Total Case : {{$totalCourtCase ?? ''}} </h4>
        </div>

    </div>
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="{{ request()->is('admin/clients/*') ? 'active' : '' }}"><a
                                href="{{ route('clients.show', [$client->id]) }}">{{__("t.client_detail")}}</a>
                        </li>

                        @if($adminHasPermition->can(['case_list']) =="1")
                            <li class="{{ request()->is('admin/client/case-list/*') ? 'active' : '' }}"
                                role="presentation"><a href="{{route('clients.case-list',[$client->id])}}">{{__("t.cases")}}</a>
                            </li>
                        @endif


                        @if($adminHasPermition->can(['invoice_list']) =="1")
                            <li class="{{ request()->is('admin/client/account-list/*') ? 'active' : '' }}"
                                role="presentation"><a
                                    href="{{route('clients.account-list',[$client->id])}}">{{__("t.account")}}</a>
                            </li>
                        @endif
                    </ul>


                </div>

                <div class="x_content">

                    <table id="clientCaselistDatatable1" class="table"
                           data-url="{{ route('client.case_view.list') }}">
                        <thead>
                        <tr>
                            <th>{{__("t.no")}}</th>
                            <th>{{__("t.case_details")}}</th>
                            <th>{{__("t.court_details")}}</th>
                            <th>{{__("t.petitioner_vs_respondent")}}</th>
                            <th>{{__("t.next_date")}}</th>
                            <th>{{__("t.status")}}</th>
                            <th>{{__("t.action")}}</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="modal-case-priority" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="show_modal">

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-change-court" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="show_modal_transfer">

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-next-date" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="show_modal_next_date">

            </div>
        </div>
    </div>


    <input type="hidden" name="advo_client_id"
           id="advo_client_id"
           value="{{$advo_client_id}}">

    <input type="hidden" name="token-value"
           id="token-value"
           value="{{csrf_token()}}">

    <input type="hidden" name="get_case_important_modal"
           id="get_case_important_modal"
           value="{{url('admin/getCaseImportantModal')}}">

    <input type="hidden" name="get_case_next_modal"
           id="get_case_next_modal"
           value="{{url('admin/getNextDateModal')}}">

    <input type="hidden" name="get_case_cort_modal"
           id="get_case_cort_modal"
           value="{{url('admin/getChangeCourtModal')}}">

@endsection
@push('js')
    <script src="{{asset('assets/js/client/client-case-datatable.js')}}"></script>
@endpush
