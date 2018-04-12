<table class="table table-responsive" id="stings-table">
    <thead>
        <tr>
            <th>highTouch</th>
        <th>Data</th>
             <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stings as $stings)
        <tr>
            <td>{!! $stings->key !!}</td>
            <td>{!! $stings->value !!}</td>
             <td     width= '138px'>
                {!! Form::open(['route' => ['stings.destroy', $stings->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                   
                    <a href="{!! route('stings.edit', [$stings->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>


                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>