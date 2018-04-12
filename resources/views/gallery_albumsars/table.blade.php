<table class="table table-responsive" id="galleryAlbumsars-table">
    <thead>
        <tr>
            <th>Title</th>
         <th>Photo</th>
        <th>Cat Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($galleryAlbumsars as $galleryAlbumsar)
        <tr>
            <td>{!! $galleryAlbumsar->title !!}</td>
                <td>     <img src="{{ URL::to('/').'/data/'. $galleryAlbumsar->photo }}"  width="50" height="50">  </td>
            <td>{!! $galleryAlbumsar->cat_id !!}</td>
            <td>
                {!! Form::open(['route' => ['galleryAlbumsars.destroy', $galleryAlbumsar->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('galleryAlbumsars.show', [$galleryAlbumsar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('galleryAlbumsars.edit', [$galleryAlbumsar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>