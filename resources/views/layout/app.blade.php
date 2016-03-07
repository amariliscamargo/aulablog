<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') ::Blog @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="your, awesome, keywords, here"/>
    @show @section('meta_author')
        <meta name="author" content="Amarilis Camargo"/>
    @show @section('meta_description')
        <meta name="description"
              content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei."/>
    @show
        <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-responsive.css')}}" rel="stylesheet">
        <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
          <script src="{{ asset('vendor/html5shiv/html5shiv.min.js')}}"></script>
          <![endif]-->

        <!--[if lt IE 10]>
          <script src="{{ asset('vendor/media-match/media.match.min.js')}}"></script>
          <script src="{{ asset('vendor/respond/respond.min.js')}}"></script>
          <![endif]-->

        <!-- Scripts -->
        <style>
            .textovira{
            writing-mode: tb-rl;
            filter: flipv fliph;
            } 
        </style>
    
    @yield('styles')
</head>
<body>
<!---->
@include('partials.header')
<!--Start Content-->
<!-- Page -->
<div>
@yield('content')
</div>
<!-- End Page -->
  <footer class="row">
    <p> &copy;2016 Blog da Amarilis Camargo.<br>
      Desenvolvido por <a href="">Amarilis Camargo</a> </p>
  </footer>
</div>
<!-- Scripts -->
@yield('scripts')

<!-- /container -->
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-popover.js"></script>
<script src="js/bootstrap-button.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-typeahead.js"></script>
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>
<script>
$('.carousel').carousel({
  interval: 5000
})
</script>
</body>
</html>