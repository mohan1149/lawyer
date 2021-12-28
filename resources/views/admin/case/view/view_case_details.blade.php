@extends('admin.layout.app')
@section('title','Case List')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_content">
                    @include('admin.case.view.card_header')
                    <div class="dashboard-widget-content">
                        <h2 class="line_30 case_detail-m-f-10">{{__("t.case_details")}}l</h2>
                        <div class="col-md-6 hidden-small">


                            <table class="countries_list">
                                <tbody>
                                <tr>
                                    <td>{{__("t.case_type")}}</td>
                                    <td class="fs15 fw700 text-right">{{$case->caseType}}</td>
                                </tr>
                                <tr>
                                    <td>{{__("t.filling_no")}}</td>
                                    <td class="fs15 fw700 text-right">{{$case->filing_number}}</td>
                                </tr>
                                <tr>
                                    <td>{{__("t.filling_date")}}</td>
                                    <td class="fs15 fw700 text-right">{{date($date_format_laravel,strtotime($case->filing_date))}}</td>
                                </tr>
                                <tr>
                                    <td>{{__("t.registration_no")}}</td>
                                    <td class="fs15 fw700 text-right">{{$case->registration_number}}</td>
                                </tr>
                                <tr>
                                    <td>{{__("t.registration_date")}}</td>
                                    <td class="fs15 fw700 text-right">{{date($date_format_laravel,strtotime($case->registration_date))}}</td>
                                </tr>
                                <tr>
                                    <td>{{__("t.cnr_no")}}</td>
                                    <td class="fs15 fw700 text-right"> {{$case->cnr_number}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6 hidden-small">

                            <table class="countries_list">
                                <tbody>

                                <tr>
                                    <td>{{__("t.first_hearing_date")}}</td>
                                    <td class="fs15 fw700 text-right s">
                                        {{date($date_format_laravel,strtotime($case->first_hearing_date))}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{__("t.next_hearing_date")}}</td>

                                    @if($adminHasPermition->can(['case_edit']) =="1")
                                        <td class="fs15 fw700 text-right">

                                            {{date($date_format_laravel,strtotime($case->next_date))}}
                                            &nbsp;<a href="javascript:void(0);"
                                                     onClick="nextDateAdd({{$case->case_id}});">
                                                <i class="fa fa-calendar"></i></a>
                                        </td>
                                    @else
                                        <td class="fs15 fw700 text-right">
                                            {{date($date_format_laravel,strtotime($case->next_date))}}

                                            &nbsp;<a href="javascript:void(0);">
                                                <i class="fa fa-calendar"></i></a>
                                        </td>



                                    @endif
                                </tr>
                                <tr>
                                    <td>{{__("t.case_status")}}</td>
                                    <td class="fs15 fw700 text-right">{{$case->case_status_name}}</td>
                                </tr>
                                <tr>
                                    <td>{{__("t.court_no")}}.</td>
                                    <td class="fs15 fw700 text-right">{{$case->court_no}}</td>
                                </tr>
                                <tr>
                                    <td>{{__("t.judge")}}</td>
                                    <td class="fs15 fw700 text-right">{{$case->judge_name}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_content">
                    <div class="dashboard-widget-content">
                        <div class="col-md-6 hidden-small">
                            <h4 class="line_30">{{__("t.petioner_and_advocate")}}</h4>


                            <table class="countries_list">
                                <tbody>
                                <tr>
                                    <td> @if(count($petitioner_and_advocate)>0 && !empty($petitioner_and_advocate)) @php $i=1; @endphp @foreach($petitioner_and_advocate as $value)
                                            <p class="subscri-ti-das"> {{ $i.') '.$value['party_name'] }}</p>
                                            <p class="subscri-ti-das"> Advocate - {{$value['party_advocate'] }} </p>
                                            @php $i++; @endphp @endforeach @endif</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6 hidden-small">
                            <h4 class="line_30">{{__("t.respondent_and_advocate")}}</h4>

                            <table class="countries_list">
                                <tbody>
                                <tr>
                                    <td>
                                        @if(count($respondent_and_advocate)>0 && !empty($respondent_and_advocate)) @php $i=1; @endphp @foreach($respondent_and_advocate as $value)
                                            <p class="subscri-ti-das"> {{ $i.') '.$value['party_name'] }}</p>
                                            <p class="subscri-ti-das"> Advocate - {{$value['party_advocate'] }} </p>
                                            @php $i++; @endphp @endforeach @endif
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="dashboard-widget-content">
                        <h4 class="line_30">
                            {{__('t.documents')}}
                        </h4>
                        <form action="/admin/upload-document" method="POST" enctype="multipart/form-data" id="uplaod_docuemt">
                            @csrf
                            <div class="form-group">
                                <label for="case_doc">{{ __("t.attach_document") }}</label>
                                <input required type="file" name="case_doc" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="cid" value="{{ $docuemts['id'] }}">
                                <input type="submit" class="btn btn-primary" value="{{__("t.upload")}}">
                            </div>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('t.name')}}</th>
                                    <th>{{ __('t.uploaded_on')}}</th>
                                    <th>{{ __('t.actions')}}</th>
                                </tr>
                                <tbody>
                                    @foreach ($docuemts['documents'] as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->uploaded_on }}</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ $item->url }}"><i class="fa fa-eye"></i></a>
                                                <button doc_id="{{$item->id}}" type="button" class="btn btn-danger deleteButton" data-toggle="modal" data-target="#deleteModal">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </thead>
                        </table>
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModal">{{__("t.sure_to_delete")}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>{{__("t.delete_text")}}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button"data-dismiss="modal"  class="btn btn-secondary">{{__("t.cancel")}}</button>
                                    <a type="button" class="btn btn-primary deleteConfirm">{{__("t.delete")}}</a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="load-modal"></div>


    <div class="modal fade" id="modal-next-date" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="show_modal_next_date">

            </div>
        </div>
    </div>

    <input type="hidden" name="getNextDateModals"
           id="getNextDateModals"
           value="{{url('admin/getNextDateModal')}}">
@endsection

@push('js')
    <script src="{{asset('assets/js/case/case_view_detail.js')}}"></script>
    <script>
        let url = "";
        $('.deleteButton').click((e)=>{
            let id = $(e.target).attr('doc_id');
            url = "/admin/delete/document/"+id;
            $('#deleteModal').show();
        });
        $('#deleteModal').on('show.bs.modal', function (event) {
            $('.deleteConfirm').click((e)=>{
                window.location.assign(url);
            });
        })
    </script>
@endpush





