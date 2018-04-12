<table class="table table-responsive" id="sliders-table">
    <thead>
        <tr>
            <th>Title</th>
         <th>Photo</th>
             <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sliders as $sliders)
        <tr>
            <td>{!! $sliders->title !!}</td>
             <td>     <img src="{{ URL::to('/').'/data/'.$sliders->photo }}"  width="50" height="50">                                  
 </td>
             <td>
                {!! Form::open(['route' => ['sliders.destroy', $sliders->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sliders.show', [$sliders->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sliders.edit', [$sliders->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>