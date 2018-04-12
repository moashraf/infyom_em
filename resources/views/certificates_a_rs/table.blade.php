<table class="table table-responsive" id="certificatesARs-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Photo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($certificatesARs as $certificatesAR)
        <tr>
            <td>{!! $certificatesAR->title !!}</td>
                             <td>     <img src="{{ URL::to('/').'/data/'. $certificatesAR->photo }}"  width="50" height="50">  </td>

            <td>
                {!! Form::open(['route' => ['certificatesARs.destroy', $certificatesAR->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('certificatesARs.show', [$certificatesAR->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('certificatesARs.edit', [$certificatesAR->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>