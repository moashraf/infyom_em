@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sliders A R
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($slidersAR, ['route' => ['slidersARs.update', $slidersAR->id], 'method' => 'patch' ,'files' => true,'enctype' => 'multipart/form-data'  ]) !!}

                        @include('sliders_a_rs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection