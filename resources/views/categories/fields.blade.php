<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- View Count Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('view_count', 'View Count:') !!}--}}
{{--    {!! Form::number('view_count', null, ['class' => 'form-control']) !!}--}}
    <input type="number" id="view_count" value="0" name="view_count" hidden>
{{--</div>--}}
<!-- Photo Field -->
<div class="form-group col-sm-12 col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
{{--    {!! Form::file('photo', null, ['class' => 'form-control']) !!}--}}
    <input type="file" id="photo" name="photo"  required>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categories.index') }}" class="btn btn-default">Cancel</a>
</div>
