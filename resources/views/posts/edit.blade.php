@extends('layout.main')

@section('title', '| Edit Blog Post')

@section('stylesheets')
    {!! Html::style('css/select2.min.css') !!}


@endsection

@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method'=>'PUT']) !!}
        <div class="col-md-8">
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title',null , ["class"=> 'form-control input-lg'])}}
            </div>
            <div class="form-group">
                {{Form::label('slug', 'Slug')}}
                {{Form::text('slug',null , ["class"=> 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('category_id', 'Category')}}
                {{Form::select('category_id',$categories , null, ["class"=> 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('tags', 'Tags:')}}
                {{Form::select('tags[]',$tags , null, ["class"=> 'form-control select2-multi', 'multiple'=>'multiple'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Content')}}
                {{Form::textarea('body',null , ["class"=> 'form-control'])}}
            </div>

        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
                </dl>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' =>'btn btn-danger
                    btn-block' )) !!}
                </div>
                <div class="col-sm-6">
                    {{  Form::submit('Save Changes',array('class' => 'btn btn-primary btn-block'))}}
                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>


@endsection
@section('scripts')
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');
    </script>
@endsection