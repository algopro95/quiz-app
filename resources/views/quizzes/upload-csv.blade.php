@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Upload Excel Form</h1>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif

    {!! Form::open(['route' => 'import', 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'mt-3']) !!}

        <div class="mb-3">
            {!! Form::label('excel_file', 'Choose Excel File', ['class' => 'form-label']) !!}
            {!! Form::file('excel_file', ['class' => 'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::submit('Import', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
</div>
@endsection
