<table class="table table-responsive" id="certificates-table">
    <thead>
        <tr>
            <th>Title</th>
         <th>photo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($certificates as $certificates)
        <tr>
            <td>{!! $certificates->title !!}</td>
               <td>     <img src="{{ URL::to('/').'/data/'.$certificates->photo  }}"  width="50" height="50">                                  
 </td>

            <td>
                {!! Form::open(['route' => ['certificates.destroy', $certificates->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('certificates.show', [$certificates->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('certificates.edit', [$certificates->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>