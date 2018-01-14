@extends('layouts.interface')

@section('content')

<!-- menu -->
<!-- slide show -->
@foreach($ket as $row)
<div class="bgded overlay" style="background-image:url({{$row->image2}});">
    <div id="pageintro" class="hoc clear">
        <div class="flexslider basicslider">
            <ul class="slides">
                <li>
                    <article>
                        <p>{{$row->excerpt}}</p>
                        <h3 class="heading">{{$row->title}}</h3>
                        <p>{{$row->content}}</p>
                        <footer><a class="btn" href="artikel">News</a></footer>
                    </article>
                </li>
                <li>
                    <article>
                        <p>{{$row->excerpt2}}</p>
                        <h3 class="heading">{{$row->title2}}</h3>
                        <p>{{$row->content2}}</p>
                        <footer><a class="btn inverse" href="companyprofile">Profile</a></footer>
                    </article>
                </li>
                <li>
                    <article>
                        <p>{{$row->excerpt3}}</p>
                        <h3 class="heading">{{$row->title3}}</h3>
                        <p>{{$row->content3}}</p>
                        <footer><a class="btn" href="gallery">Gallery</a></footer>
                    </article>
                </li>
            </ul>
        </div>

    </div>
</div>
<br>
@endforeach


<!-- artikel -->
@foreach($result as $row)

    <div class="wrapper row3">
        <main class="hoc container clear">
            <div class="sectiontitle">
                <h3 class="heading">{{$row->title}}</h3>
                <p>{{$row->excerpt}}</p>
            </div>
            <p class="btmspace-50 justified">{!! $row->content !!}</p>
            <br>
            <div class="clear"></div>
        </main>
    </div>

@endforeach

@endsection