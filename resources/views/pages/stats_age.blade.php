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
            <p>Pour le referentiel <b>{{$item->libelle}}</b> il y'a {{$item->number_formations}} formation(s). <br/> 
        @endforeach
    </div>

    <div class="blok">
        <h3>Nombre de Candidats Par Sexe</h3>

        @foreach($number_of_candidat_by_sexe as $item)
            <p>Pour le sexe <b>{{$item->sexe}}</b> il y'a {{$item->number_of_candidates}} de candidat(s). <br/> 
        @endforeach
    </div>

    <div class="blok">
        <h3>Nombre de Formations Par Type de Referentiel</h3>

        @foreach($number_of_formation_by_type as $item)
            <p>Pour le Type Referentiel <b>{{$item->type_referentiel}}</b> il y'a {{$item->number_of_formations}} formation(s). <br/> 
        @endforeach
    </div>
    <div class="clear"></div>
    <div class="gains">
        <canvas id="myChart"></canvas>
    </div>

</div>


@endsection



@section("js")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    //import Chart from 'chart.js/auto';


    let ctx = document.getElementById("myChart");

    let ages =  {{ Js::from($data_ages) }};
    let labels = {{ Js::from($labels_ages) }}

    new Chart(ctx, {
        // The type of chart we want to create
        type: "line",

        data: {
            labels: labels,
            datasets: [
                {
                    label: "Tranche D'age",
                    backgroundColor: "rgba(255, 99, 132)",
                    borderColor: "rgba(255, 99, 132)",
                    data: ages
                }
            ]
        },

        // Configuration options go here
        options: {}
});
</script>
@endsection