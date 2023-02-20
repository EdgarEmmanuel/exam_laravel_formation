@extends('Home')


@section("main")

<div class="starter-stats">
    <div class="blok">
        <i class="fa fa-money"></i>
        <div class="no">
            <p>Nombre de Candidats</p>
            <p>{{ $number }}</p>
        </div>
    </div>
</div>



<div class="container">
    <form method="post" action="/register_formation">
        @csrf
        <div class="form-group">
          <input class="form-control" id="exampleFormControlInput1" placeholder="Le Nom" name="nom" type="text" 
          tabindex="1" required/>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Le Prenom</label>
            <input class="form-control" id="exampleFormControlInput2" placeholder="Le Prenom" name="prenom"
             type="text" tabindex="1" required/>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">L'email</label>
            <input class="form-control" id="exampleFormControlInput2" placeholder="Email" name="email" 
            type="email" tabindex="1" required/>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">L'Age</label>
            <input class="form-control" id="exampleFormControlInput2" placeholder="L'age" min="10" max="99" name="age" 
            type="number" tabindex="1" required/>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Le Niveau d'Etudes</label>
            <input class="form-control" id="exampleFormControlInput2" placeholder="Niveau d'Etudes" name="niveau_etude" 
            type="text" tabindex="1" required/>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">La Formation</label>
            <select class="form-control" name="referentiel_id" id="exampleFormControlSelect1" required>
              <option type="">...</option>
              @foreach($formations as $f)
  
                <option value="{{ $f->id }}">
                    {{ $f->nom }}
                </option>
  
              @endforeach
            </select>
        </div>
        <fieldset class="form-group row">
            <legend class="col-form-label col-sm-2 float-sm-left pt-0">Sexe</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sexe" id="gridRadios1" value="masculin" checked>
                <label class="form-check-label" for="gridRadios1">
                  Masculin
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sexe" id="gridRadios2" value="feminin">
                <label class="form-check-label" for="gridRadios2">
                  Feminin
                </label>
              </div>
            </div>
          </fieldset>
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
            <th scope="col">Nom Complet</th>
            <th scope="col">Email</th>
            <th scope="col">Age ( Sexe ) </th>
            <th scope="col">Niveau Etude</th>
          </tr>
        </thead>
        <tbody>
            @foreach($candidats as $r )
                <tr>
                    <th scope="row"> {{ $r->id }} </th>
                    <td>{{ $r->nom }} {{ $r->prenom }} </td>
                    <td>{{ $r->email }}</td>
                    <td>{{ $r->age }} ( {{ $r->sexe }} )</td>
                    <td>{{ $r->niveau_etude }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $candidats->links() }}
</div>


@endsection