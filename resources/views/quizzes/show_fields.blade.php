<!-- Question Field -->
<div class="col-sm-12">
    {!! Form::label('question', 'Question:') !!}
    <p>{{ $quiz->question }}</p>
</div>

<!-- A Field -->
<div class="col-sm-12">
    {!! Form::label('a', 'A:') !!}
    <p>{{ $quiz->a }}</p>
</div>

<!-- B Field -->
<div class="col-sm-12">
    {!! Form::label('b', 'B:') !!}
    <p>{{ $quiz->b }}</p>
</div>

<!-- C Field -->
<div class="col-sm-12">
    {!! Form::label('c', 'C:') !!}
    <p>{{ $quiz->c }}</p>
</div>

<!-- D Field -->
<div class="col-sm-12">
    {!! Form::label('d', 'D:') !!}
    <p>{{ $quiz->d }}</p>
</div>

<!-- Answer Field -->
<div class="col-sm-12">
    {!! Form::label('answer', 'Answer:') !!}
    <p>{{ $quiz->answer }}</p>
</div>

<!-- Score Field -->
<div class="col-sm-12">
    {!! Form::label('score', 'Score:') !!}
    <p>{{ $quiz->score }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $quiz->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $quiz->updated_at }}</p>
</div>

