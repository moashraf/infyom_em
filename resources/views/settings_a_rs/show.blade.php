@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Settings A R
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('settings_a_rs.show_fields')
                    <a href="{!! route('settingsARs.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
