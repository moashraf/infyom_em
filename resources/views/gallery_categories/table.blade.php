<table class="table table-responsive" id="galleryCategories-table">
    <thead>
        <tr>
            <th>Title</th>
              <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($galleryCategories as $galleryCategory)
        <tr>
            <td>{!! $galleryCategory->title !!}</td>
              <td>
                {!! Form::open(['route' => ['galleryCategories.destroy', $galleryCategory->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('galleryCategories.show', [$galleryCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('galleryCategories.edit', [$galleryCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>