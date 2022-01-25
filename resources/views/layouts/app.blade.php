<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shefaa Al Deek</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive-tabs.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/hint.min.css')}}" />
</head>

<body>
    @yield('section')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>© Made with <i class="fa fa-heart"></i> by <a class="author" href="#" title="Fada Arzimanli" aria-label="Linkedin" target="_blank">Fada Arzimanli</a> in Azerbaijan</p>
                    <p>En iyi <a href="https://siyahfilmizle.com/" title="film izle">film izle</a></p>
                </div>
            </div>
        </div>
    </footer>
@yield('script')
</body>

</html>