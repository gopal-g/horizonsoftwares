<!DOCTYPE html>
<!--[if lte IE 8]>               <html class="ie8 no-js" lang="en">    <![endif]-->
<!--[if lte IE 10]>              <html class="ie10 no-js" lang="en">   <![endif]-->
<!--[if !IE]>-->                 <html class="not-ie no-js" lang="en"> <!--<![endif]-->
<head>

<head>
    <title>
        @section('title')
           Horizon Softwares
        @show
    </title>

    <!-- Google Web Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,300italic,400,700|Julius+Sans+One|Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>

    <!-- Meta -->
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We specialize in churning out superb web and mobile applications that express the missions of our clients most effectively and enable the products and services to be user-friendly and remarkably appealing.Whether its building, customizing or maintaining your company portfolio website, your exceptional mobile app, your uniquely intricate product or your mission critical software as a service, we can do that!And we have done it before">
    <meta name="keywords" content="web designers in nairobi, smart web kenya nairobi, kenya, list of web designing companies, kenya web designers nairobi, kenya, web design company in kenya nairobi, kenya, web design and development in kenya, nairobi web designers nairobi, kenya, webscreations design nairobi, kenya, Website design and development, Domain Name registration, Website and email hosting, Search Engine optimization">
    <meta name="author" content="Horizon Softwares">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="manifest" href="assets/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
    ================================================== -->
    {{ Html::style('assets/css/style.css') }}
    {{ Html::style('assets/css/grid.css') }}
    {{ Html::style('assets/css/layout.css') }}
    {{ Html::style('assets/css/fontello.css') }}
    {{ Html::style('assets/css/animation.css') }}
    
    {{ Html::style('assets/plugins/layerslider/css/layerslider.css') }}
    {{ Html::style('assets/plugins/flexslider/flexslider.css') }}
    
    @yield('css')

    <!-- Html5 Shiv
    ================================================== -->
    {{ Html::script('assets/plugins/jquery.modernizr.js') }}

</head> 
<body data-spy="scroll" data-target="#navigation" class="home">

    <!-- Facebook like box -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=355421387962672";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

   


    <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

    <div id="wrapper">
        @include('includes.header')
        @yield('content')
    </div><!--/ #wrapper-->

    <!-- - - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - - -->

    @include('includes.footer')

    <!-- backtotop -->
    <div class="backtotop">
        <a href="#welcome" class="scroll">
            <span></span>
        </a>
    </div>
    <a href="#" id="back-top" title="Back To Top"></a>
    <!-- /backtotop -->

    <!-- JS Global Compulsory -->     
    {{ Html::script('assets/plugins/jquery.min.js') }}
    {{ Html::script('assets/plugins/jquery-ui.js') }}
    {{ Html::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}
   
    <!-- new flame -->
    {{ Html::script('assets/plugins/flexslider/jquery.flexslider.js') }}
    {{ Html::script('assets/plugins/jquery.nicescroll.js') }}

    <!-- JS Page Level -->           
    {{ Html::script('assets/js/app.js') }}
    {{ Html::script('assets/js/pages/index.js') }}
    {{ Html::script('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}
    {{ Html::script('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}


    @yield('js')


    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            App.initSliders();
            App.scrollSweet();
            
         /* Vector Map */
        // var jvm_wm = new jvm.WorldMap({container: $('#africa'),
        $('#africa').vectorMap({
            map: 'world_mill_en', 
            backgroundColor: 'rgba(255, 255, 255, 0)',                                      
            regionsSelectable: true,
            regionStyle: {selected: {fill: '#B64645'},
                            initial: {fill: '#ddd'}},

            markerStyle: {initial: {fill: '#32cd32',
                           stroke: '#32cd32'}},
            // markers: [{latLng: [51.51, -0.13], name: 'London'},
            //           {latLng: [40.71, -74.00], name: 'New York'},
            //           {latLng: [-1.2833, 36.8167], name: 'Nairobi'}],
            markers: [{latLng: [-1.2833, 36.8167], name: 'Nairobi City'}],
            selectedRegions: ["KE"],
            focusOn: {
                  x: 0.52,
                  y: 0.65,
                  scale: 4
                },
            zoomOnScroll: false,
            zoomMax: 20,
            hoverColor: '#o9baff',
        });    

        /* END Vector Map */

        });
    </script>

    <!-- toastr stuff -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
    <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}" type="text/javascript"></script>
    @include('includes.toastr')
    @include('includes.ga')
    <!--[if lt IE 9]>
        <script src="assets/plugins/respond.js"></script>
    <![endif]-->
</body>

<!-- Common JS Libs -->

</html>
