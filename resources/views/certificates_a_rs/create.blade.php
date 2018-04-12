@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Certificates A R
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'certificatesARs.store' ,'files' => true,'enctype' => 'multipart/form-data'  ]) !!}

                        @include('certificates_a_rs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
