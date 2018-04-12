<table class="table table-responsive" id="settingsARs-table">
    <thead>
        <tr>
            <th>Data</th>
        <th>Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($settingsARs as $settingsAR)
        <tr>
            <td>{!! $settingsAR->key !!}</td>
            <td>{!! $settingsAR->value !!}</td>
            <td>
                {!! Form::open(['route' => ['settingsARs.destroy', $settingsAR->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    
                    <a href="{!! route('settingsARs.edit', [$settingsAR->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                   
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>