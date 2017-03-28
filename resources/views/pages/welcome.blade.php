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
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Section Box</h2>
                <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    Your content goes here
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

