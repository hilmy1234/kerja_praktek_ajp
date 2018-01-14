@extends('layouts.interface')

@section('content')

<!-- menu -->
<!-- Responsive slider - START -->
@foreach($slideshow as $row)
<div class="slider">
    <div class="post-item">
        <div class="">
            <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                <div class="slides" data-group="slides">
                    <ul>
                        <li>
                            <div class="slide-body" data-group="slide">
                                <img src="{{$row->imageslide1}}" alt="" class="img-responsive" >
                            </div>
                        </li>
                        <li>
                            <div class="slide-body" data-group="slide">
                                <img src="{{$row->imageslide2}}" alt="" class="img-responsive" >
                            </div>
                        </li>
                        <li>
                            <div class="slide-body" data-group="slide">
                                <img src="{{$row->imageslide3}}" alt="" class="img-responsive" >
                            </div>
                        </li>
                    </ul>
                </div>
                <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
            </div>
        </div>
    </div>
</div>
<br>
@endforeach
<!-- Responsive slider - END -->

<!-- artikel -->
@foreach($result as $row)

<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="sectiontitle">
            <h3 class="heading">{{$row->title}}</h3>
            <p>{{$row->excerpt}}</p>
        </div>
        <p class="btmspace-50 justified">{!! $row->content !!}</p>

        <div class="clear"></div>
    </main>
</div>
<br>

@endforeach


<!-- Bootstrap isi ( slide show) -->
<link href="css/responsive-slider.css" rel="stylesheet" type="text/css">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" type="text/javascript"></script>
<script src="js/responsive-slider" type="text/javascript"></script>
<![endif]-->
<!-- jQuery isi (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.1.1.min.js"></script>
<!-- isi Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/responsive-slider.min.js"></script>
<script>
    wow = new WOW(
        {

        }	)
        .init();
</script>

@endsection

