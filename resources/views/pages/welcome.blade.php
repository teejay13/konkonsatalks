@extends('layout.main')

@section('title', '| Homepage ')

@section('content')
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <h1 class="title">Default Layout</h1>                            </div>


                    </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-12">
        @foreach($posts as $post)
        <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">{{ $post->title }}</h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p>{{ substr($post->body,0, 300)}}{{strlen($post->body) > 300?: "..." }}</p>
                            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-purple" >Read More</a>
                        </div>
                    </div>
                </div>
        </section>
        @endforeach
    </div>
@endsection

