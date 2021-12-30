@extends('admin.layout.app')
@section('title',__("t.view_execution"))
@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <h2>{{ __('t.view_execution') }}</h2>
                    <div class="x_content">
                        <div class="card">
                            <div class="card-body">
                                <p>{{ __("t.exe_date") }}</p>
                                <h2 class="alert alert-info">{{ $record->exe_date }}</h2>
                                <p>{{ __("t.exe_notes") }}</p>
                                <h4>{{ $record->exe_notes }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
