@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            settings
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'stings.store' ,'files' => true,'enctype' => 'multipart/form-data']) !!}

                        @include('stings.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
