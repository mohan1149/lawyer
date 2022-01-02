@extends('admin.layout.app')
@section('title',__("t.level_history"))
@section('content')
    <div class="container" style="padding: 15px;margin:15px;margin-top:50px">
        @foreach ($levels as $level)
            <div class="panel panel-info">
                <div class="panel-heading" style="text-align: center;font-size:20px">
                    {{ __("t.level".$level->level_id) }}
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>{{ __("t.prev_request") }}</h3>
                            <h5>{{ $level->prev_request }}</h5>

                            <h3>{{ __("t.next_request") }}</h3>
                            <h5>{{ $level->prev_request }}</h5>
                        </div>
                        <div class="col-md-6">
                            <h3>{{ __("t.pre_response") }}</h3>
                            <h5>{{ $level->pre_response }}</h5>

                            <h3>{{ __("t.next_response") }}</h3>
                            <h5>{{ $level->next_response }}</h5>
                        </div>
                        <div class="col-md-12">
                            <h3>{{ __("t.notes") }}</h3>
                            <h5>{{ $level->level_notes }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="glyphicon glyphicon-arrow-down" aria-hidden="true" style="display:flex;justify-content: center"></h2>
        @endforeach
    </div>
@endsection