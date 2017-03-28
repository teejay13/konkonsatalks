@extends('layout.main')

@section('title', ' | Create New Post')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/parsley.css')}}">

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
            <div class="box-body">
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title',null,array('class' => 'form-control', 'placeholder'=>'Title','required' => '', 'maxlength' => '255'))}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'Content')}}
                    {{Form::textarea('body',null,array('class' => 'form-control', 'placeholder'=>'Content' ,'required' => ''))}}
                </div>
                <div class="form-group">
                    {{Form::submit('Publish Post',array('class' => 'btn btn-primary btn-sm'))}}
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>



@endsection


@section('scripts')
    <script src="{{URL::asset('js/parsley.min.js')}}"></script>




