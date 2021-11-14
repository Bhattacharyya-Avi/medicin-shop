<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link href="{{url('css/style1.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{url('css/morris.css')}}">
    <link rel="stylesheet" href="{{url('css/materialdesignicons.min.css')}}">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <meta name="robots" content="noindex, nofollow">
</head>

<body>



    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            @include('backend.partials.header')
        </div>
        @include('backend.partials.sidebar')
        <div class="dashboard-wrapper">
            <div class="dashboard-influence">
                <div class="container-fluid dashboard-content">

                    @yield('contents')






                </div>
            </div>



            @include('backend.partials.footer')



        </div>



    </div>





    <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>

    <script src="{{url('js/bootstrap.bundle.js')}}"></script>

    <script src="{{url('js/jquery.slimscroll.js')}}"></script>

    <script src="{{url('js/main-js.js')}}></script>

    <script src="{{url('js/raphael.min.js')}}"></script>
    <script src="{{url('js/morris.js')}}"></script>
    <script src="assets/vendor/charts/morris-bundle/morrisjs.html"></script>

    <script src="{{url('js/Chart.bundle.js')}}"></script>
    <script src="{{url('js/chartjs.js')}}"></script>

    <script src="{{url('js/dashboard-influencer.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"6ade18dffbe92f16","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>
