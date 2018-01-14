<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/1.png">
    <title>PT. Azril Pratama </title>

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link href="css/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>


<body>

<!-- Header -->
<div class="allcontain">
    <div class="header">
        <ul class="socialicon">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
        <ul class="givusacall">
            <li>PT. AZRIL JAYA PRATAMA </li>
        </ul>
        <ul class="logreg">
            <li><a href="/"><i class="fa fa-lg fa-home"></i></a></li>
            <li><a href="login"><span class="register">Login</span></a></li>
        </ul>
    </div>


    <!-- Navbar Up -->
    <nav class="topnavbar navbar-default topnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
                    <span class="sr-only"> Toggle navigaion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="/"><img src="img/1.png" alt="logo"width="px"height="50px"></a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="upmenu">
            <ul class="nav navbar-nav" id="navbarontop">
                <li class="active"><a href="/">HOME</a> </li>
                <li><a href="artikel">Artikel</a></li>
                <li><a href="companyprofile">Company Profile</a></li>
                <li><a href="gallery">Gallery</a></li>
                <li><a href="contactperson">Contact Us</a></li>
                <li><a href="ourclient">Our Client</a></li>
            </ul>
        </div>
    </nav>
</div>


<!-- menu -->
<!-- slide show -->
<div class="bgded overlay" style="background-image:url('img/1.jpg');">
    <div id="pageintro" class="hoc clear">
        <div class="flexslider basicslider">
            <ul class="slides">
                <li>
                    <article>
                        <p>Lacinia</p>
                        <h3 class="heading">Eleifend tristique lacus</h3>
                        <p>Eleifend sagittis cras convallis nisl eget</p>
                        <footer><a class="btn" href="Artikel">News</a></footer>
                    </article>
                </li>
                <li>
                    <article>
                        <p>Pulvinar</p>
                        <h3 class="heading">Ornare tortor quisque</h3>
                        <p>Odio semper sed euismod mi euismod curabitur</p>
                        <footer><a class="btn inverse" href="companyprofile">Profile</a></footer>
                    </article>
                </li>
                <li>
                    <article>
                        <p>Sagittis</p>
                        <h3 class="heading">Feugiat blandit erat</h3>
                        <p>Convallis nibh nulla nec dictum mi consequat vel</p>
                        <footer><a class="btn" href="gallery">Gallery</a></footer>
                    </article>
                </li>
            </ul>
        </div>

    </div>
</div>
<br>

<!-- menu -->
@foreach($welcomes as $welcome)
    <div class="wrapper row3">
        <main class="hoc container clear">

            <div class="sectiontitle">
                <h3 class="heading">Tincidunt phasellus</h3>
                <p>Non risus leo sed eget lobortis risus mauris blandit maximus.</p>
            </div>
            <p class="btmspace-50 justified">Enim neque nec placerat risus suscipit vitae volutpat nisi sit amet turpis molestie ut sodales nisi efficitur duis id ex eros vivamus ac vehicula nibh non luctus ipsum suspendisse dolor metus varius in facilisis vitae euismod nec ex donec ullamcorper eros vel molestie sagittis libero augue elementum libero cursus euismod sem leo sed augue praesent condimentum odio sit amet nulla tempor sollicitudin lacinia mauris vestibulum cras euismod accumsan dolor et convallis praesent porttitor maximus viverra proin fermentum scelerisque neque quis consequat mauris rutrum eget proin fringilla nisi libero in tincidunt tortor porttitor sed phasellus vitae molestie massa suspendisse.</p>

            <div class="clear"></div>
        </main>
    </div>
@endforeach
<!-- Copyright -->
<footer>
    <center>
        <div id="footer">
            <span>&copy;PT.Azril Jaya Pratama 2017 All right reserved. By Muhammad Hilmy & Syipa Fauziah</span>
        </div>
    </center>
</footer>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

</body>
</html>

<!-- JAVASCRIPTS -->
<script src="css/layout/scripts/jquery.min.js"></script>
<script src="css/layout/scripts/jquery.backtotop.js"></script>
<script src="css/layout/scripts/jquery.mobilemenu.js"></script>
<script src="css/layout/scripts/jquery.flexslider-min.js"></script>
