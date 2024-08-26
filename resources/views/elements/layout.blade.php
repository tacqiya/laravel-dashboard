<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Tacqiya">
    <meta name="author" content="Tacqiya">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Tacqiya Dashboard | {{$page}}</title>
    
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('')}}/assets/favicon/android-icon-192x192.png">
    <link rel="manifest" href="{{url('')}}/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{url('')}}/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{url('')}}/css/simplebar.css">
    <!-- Main styles for this application-->
    <link href="{{url('')}}/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="{{url('')}}/css/examples.css" rel="stylesheet">
    @if($page == 'dashboard')
    <link href="{{url('')}}/node_modules/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
    @endif
    <link href="{{url('')}}/scss/style.css" rel="stylesheet">
</head>

<body>

    @yield('content')


    <footer class="footer">
        <div><a href="https://tacqiya.netlify.app/">Tacqiya's Admin Template</a> &copy;
            {{date('Y')}} playgrounds.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://tacqiya.netlify.app/">tacqiya</a></div>
    </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{url('')}}/node_modules/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="{{url('')}}/node_modules/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    @if($page == 'dashboard')
    <script src="{{url('')}}/node_modules/chart.js/js/chart.min.js"></script>
    <script src="{{url('')}}/node_modules/@coreui/chartjs/js/coreui-chartjs.js"></script>
    @endif
    <script src="{{url('')}}/node_modules/@coreui/utils/js/coreui-utils.js"></script>
    @if($page == 'dashboard')
    <script src="{{url('')}}/js/main.js"></script>
    @endif
    <script></script>
</body>

</html>
