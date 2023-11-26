<!-- Question Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question', 'Question:') !!}
    {!! Form::text('question', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- A Field -->
<div class="form-group col-sm-6">
    {!! Form::label('a', 'A:') !!}
    {!! Form::text('a', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- B Field -->
<div class="form-group col-sm-6">
    {!! Form::label('b', 'B:') !!}
    {!! Form::text('b', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- C Field -->
<div class="form-group col-sm-6">
    {!! Form::label('c', 'C:') !!}
    {!! Form::text('c', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- D Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d', 'D:') !!}
    {!! Form::text('d', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Answer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer', 'Answer:') !!}
    {!! Form::select('answer', ['a' => 'A', 'b' => 'B', 'c' => 'C', 'd' => 'D'], null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('score', 'Score:') !!}
    {!! Form::text('score', null, ['class' => 'form-control', 'required']) !!}
</div>