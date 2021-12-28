@extends('admin.layout.app')
@section('title','Judge')
@section('content')
    <div class="">

        @component('component.modal_heading',
             [
             'page_title' => 'Judge',
             'action'=>route("judge.create"),
             'model_title'=>'Create Judge',
             'modal_id'=>'#addtag',
             'permission' => $adminHasPermition->can(['judge_add'])
             ] )
            Status
        @endcomponent


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table id="tagDataTable" class="table" data-url="{{ route('judge.list') }}">
                            <thead>
                            <tr>
                                <th width="5%">{{__("t.no")}}</th>
                                <th>{{__("t.judge")}}</th>
                                <th width="5%" data-orderable="false">{{__("t.status")}}</th>
                                <th width="2%" data-orderable="false" class="text-center">{{__("t.action")}}</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="load-modal"></div>
@endsection

@push('js')
    <script src="{{asset('assets/js/settings/judge-datatable.js')}}"></script>

@endpush
