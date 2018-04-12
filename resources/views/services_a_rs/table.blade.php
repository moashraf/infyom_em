<table class="table table-responsive" id="servicesARs-table">
    <thead>
        <tr>
            <th>Title</th>
         <th>Link</th>
        <th>Photo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($servicesARs as $servicesAR)
        <tr>
            <td>{!! $servicesAR->title !!}</td>
       <td>     <img src="{{ URL::to('/').'/data/'. $servicesAR->photo }}"  width="50" height="50">  </td>

            <td>
                {!! Form::open(['route' => ['servicesARs.destroy', $servicesAR->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('servicesARs.show', [$servicesAR->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('servicesARs.edit', [$servicesAR->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>