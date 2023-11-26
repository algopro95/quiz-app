@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quizzes</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right  ml-2"
                       href="{{ route('quizzes.create') }}">
                        Add New
                    </a>
                    <a class="btn btn-info float-right"
                        href="{{ url('upload-csv') }}">
                        Upload xlsx
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('quizzes.table')
        </div>
    </div>

@endsection
