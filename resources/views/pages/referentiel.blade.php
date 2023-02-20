@extends('Home')


@section("main")

<div class="starter-stats">
    <div class="blok">
        <i class="fa fa-money"></i>
        <div class="no">
            <p>Nombre de Referentiels</p>
            <p>{{ $number }}</p>
        </div>
    </div>
</div>


<div class="container">
    <form method="post" action="/register_type">
        @csrf
        <div class="form-group">
          <input class="form-control" placeholder="Le Nom" name="nom" type="text" tabindex="1" required/>
        </div>
        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">
            Enregistrer
          </button>
        </fieldset>
      </form>
</div>


<br><br/>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Libelle</th>
          </tr>
        </thead>
        <tbody>
            @foreach($referentiels as $r )
                <tr>
                    <th scope="row"> {{ $r->id }} </th>
                    <td>{{ $r->libelle }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection