@extends('Home')



@section("main")

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


@endsection