<!-- Title Field -->
<div class="form-group col-sm-4">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
 

<div class="form-group col-sm-4">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::file('photo') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('certificates.index') !!}" class="btn btn-default">Cancel</a>
</div>
