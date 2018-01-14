@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">


                    <article class="post-item">
                        <div class="post-item-image">
                            <a href="">
                                <img src="{{ $row->image }}"style="max-width: 25%" alt="">
                            </a>
                        </div>


                        <div class="post-item-body">
                            <div class="padding-10">
                                <h1>{{ $row->title }}</h1>
                                <p>{!! $row->content !!}</p>
                            </div>

                            <div class="post-meta padding-10 clearfix">
                                <div class="pull-left">
                                    <ul class="post-meta-group">
                                        <li><i class="fa fa-user"></i><a href="#"> {{ $row->name_author }} </a></li>
                                        <li><i class="fa fa-tags"></i><a href="#"> {{ date('M,d Y',strtotime($row->created_at)) }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>


            </div>
            @include('layouts.sidebar')
        </div>
    </div>
@endsection