<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FORMATION | APP</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="css/app.css" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


        @yield("css")
    </head>
    <body class="antialiased">

        <div class="option">
            <div class="logo">
                <div class="dashboto-logo">
                    <p>D</p>
                    <p>BJ</p>
                </div>
                <p class="logo rog">devby</p>
                <p class="logo">JESUS</p>
            </div>
            <div class="clear"></div>
            <ul class="menu">
                <a href="/">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
                <br>
                <a href="/types">
                    <i class="fa fa-tasks"></i>
                    Types
                </a>
                <a href="/referentiels">
                    <i class="fa fa-book"></i>
                    Referentiels
                </a>
                <a href="/formations">
                    <i class="fa fa-book"></i>
                    Formations
                </a>
                <a href="/candidats">
                    <i class="fa fa-users"></i>
                    Candidats
                </a>
                <a href="/statistiques">
                    <i class="fa fa-bar-chart"></i>
                    Statistiques
                </a>
            </ul>
        </div>
        
        <div class="dashboard-heading">
            {{-- <div class="panel">
                <i class="fa fa-bell">
                    <b>1</b>
                </i>
                <div ng-app="app" ng-controller="coin">
                    <p class="btc-price">priceGBP</p>
                </div>
            </div> --}}
            <div class="all">
                
                @yield("main")
        
            </div>
        
        </div>


        <script src="{{ mix('/js/app.js') }}"></script>
        @yield("js")
    </body>


</html>