<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FORMATION | APP</title>

        <link rel="stylesheet" href="css/app.css" />


        @yield("js")
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
                <a href="">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
                <br>
                <a href="">
                    <i class="fa fa-tasks"></i>
                    Transactions
                </a>
                <a href="">
                    <i class="fa fa-book"></i>
                    Invoice Tool
                </a>
                <a href="">
                    <i class="fa fa-newspaper-o"></i>
                    News
                </a>
                <a href="">
                    <i class="fa fa-money"></i>
                    Donate
                </a>
            </ul>
        </div>
        
        <div class="dashboard-heading">
            <div class="panel">
                <i class="fa fa-bell">
                    <b>1</b>
                </i>
                <div ng-app="app" ng-controller="coin">
                    <p class="btc-price">priceGBP</p>
                </div>
            </div>
            <div class="all">
                <div class="starter-stats">
                    <div class="blok">
                        <i class="fa fa-money"></i>
                        <div class="no">
                            <p>Asset Types</p>
                            <p>3</p>
                        </div>
                    </div>
        
                    <div class="blok">
                        <i class="fa fa-money kl"></i>
                        <div class="no">
                            <p>Total Gains</p>
                            <p>-100.01 BLONION</p>
                        </div>
                    </div>
        
                    <div class="blok">
                        <i class="fa fa-money pl"></i>
                        <div class="no">
                            <p>Longest HODL</p>
                            <p>8 Months</p>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="gains">
                        <canvas id="myChart"></canvas>
                    </div>
        
                </div>
        
            </div>
        
        </div>


        <script src="{{ mix('/js/app.js') }}"></script>
    </body>


</html>