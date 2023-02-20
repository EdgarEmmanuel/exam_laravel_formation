@extends('Home')



@section("main")

<div class="starter-stats">
    <div class="blok">
        <h3>Nombre de Candidats Par Formation</h3>

        @foreach($number_of_candidate_by_formation as $item)
            <p>Pour la formation <b>{{$item->libelle_formation}}</b> il y'a {{$item->numbers_candidats}} de candidat(s). <br/> 
        @endforeach
    </div>

    <div class="blok">
        <h3>Nombre de Formations Par Referentiel</h3>

        @foreach($number_of_formation_by_referentiel as $item)
            <p>Pour le referentiel <b>{{$item->libelle}}</b> il y'a {{$item->number_formations}} de formation(s). <br/> 
        @endforeach
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