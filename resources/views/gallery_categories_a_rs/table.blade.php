<table class="table table-responsive" id="galleryCategoriesARs-table">
    <thead>
        <tr>
            <th>Title</th>
             <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($galleryCategoriesARs as $galleryCategoriesAR)
        <tr>
            <td>{!! $galleryCategoriesAR->title !!}</td>
             <td>
                {!! Form::open(['route' => ['galleryCategoriesARs.destroy', $galleryCategoriesAR->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('galleryCategoriesARs.show', [$galleryCategoriesAR->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('galleryCategoriesARs.edit', [$galleryCategoriesAR->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>