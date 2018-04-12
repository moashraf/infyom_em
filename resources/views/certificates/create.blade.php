@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Certificates
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'certificates.store'  ,'files' => true,'enctype' => 'multipart/form-data' ]) !!}

                        @include('certificates.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
