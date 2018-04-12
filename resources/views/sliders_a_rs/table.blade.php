<table class="table table-responsive" id="slidersARs-table">
    <thead>
        <tr>
            <th>Title</th>
         <th>Photo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($slidersARs as $slidersAR)
        <tr>
            <td>{!! $slidersAR->title !!}</td>
                              <td>     <img src="{{ URL::to('/').'/data/'. $slidersAR->photo }}"  width="50" height="50">  </td>

            <td>
                {!! Form::open(['route' => ['slidersARs.destroy', $slidersAR->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('slidersARs.show', [$slidersAR->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('slidersARs.edit', [$slidersAR->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>