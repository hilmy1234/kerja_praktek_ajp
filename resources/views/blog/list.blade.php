@extends('layouts.main')

@section('content')

    <div class="page-title">
        <h1>{{ $header_title }}</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                @foreach($result as $row)

                    <article class="post-item">
                        <div class="post-item-image">
                            <a href="">
                                <img src="{{ $row->image }}" alt="">
                            </a>
                        </div>


                        <div class="post-item-body">
                            <div class="padding-10">
                                <h2><a href="{{ url("article/$row->slug") }}" title="{{$row->title}}">{{ $row->title }}</a></h2>
                                <p>{{ str_limit(strip_tags($row->content),200 ) }}</p>
                            </div>

                            <div class="post-meta padding-10 clearfix">
                                <div class="pull-left">
                                    <ul class="post-meta-group">
                                        <li><i class="fa fa-user"></i><a href="#"> {{ $row->name_author }} </a></li>
                                        <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                        <li><i class="fa fa-tags"></i><a href="#"> {{ date('M,d Y',strtotime($row->created_at)) }}</a></li>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url("article/$row->slug") }}" title="{{$row->title}}">Continue Reading &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                @endforeach

                @if(count($result)==0)
                    <div class="alert alert-info">Sorry the article is not found !</div>
                @endif
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
@endsection

{!! $result->links() !!}