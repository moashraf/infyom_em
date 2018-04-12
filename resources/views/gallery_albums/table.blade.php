<table class="table table-responsive" id="galleryAlbums-table">
    <thead>
        <tr>
            <th>Title</th>
         <th>Photo</th>
         <th>Cat  </th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($galleryAlbums as $galleryAlbum)
        <tr>
            <td>{!! $galleryAlbum->title !!}</td>
                       <td>     <img src="{{ URL::to('/').'/data/'. $galleryAlbum->photo }}"  width="50" height="50">  </td>

             <td>{!! $galleryAlbum->get_projects_cat['title']  !!}</td>
             <td>
                {!! Form::open(['route' => ['galleryAlbums.destroy', $galleryAlbum->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('galleryAlbums.show', [$galleryAlbum->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('galleryAlbums.edit', [$galleryAlbum->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>