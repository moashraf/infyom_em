@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Gallery Album
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($galleryAlbum, ['route' => ['galleryAlbums.update', $galleryAlbum->id], 'method' => 'patch' ,'files' => true,'enctype' => 'multipart/form-data'
 ]) !!}

                        @include('gallery_albums.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection