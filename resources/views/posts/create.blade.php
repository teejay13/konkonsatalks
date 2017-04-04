@extends('layout.main')

@section('title', ' | Create New Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea',
            plugins: 'link code',
            menubar: false
        });
    </script>

@endsection


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
            <div class="box-body">
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title',null,array('class' => 'form-control input-lg', 'placeholder'=>'Title','required' => '', 'maxlength' => '255'))}}
                </div>
                <div class="form-group">
                    {{Form::label('slug', 'Slug')}}
                    {{Form::text('slug',null,array('class' => 'form-control', 'placeholder'=>'Url' ,'required' => '', 'minlength'=> '5', 'maxlength'=> '255')) }}
                </div>
                <div class="form-group">
                    {{Form::label('category_id', 'Category')}}
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option class="form-control" value="{{ $category->id }}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    {{Form::label('tags', 'Tags')}}
                    <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                            <option class="form-control" value="{{ $tag->id }}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    {{Form::label('body', 'Content')}}
                    {{Form::textarea('body',null,array('class' => 'form-control', 'placeholder'=>'Content'))}}
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

    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>


@endsection








