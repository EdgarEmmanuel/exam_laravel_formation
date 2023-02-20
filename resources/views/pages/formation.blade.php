@extends('Home')


@section("main")

<div class="starter-stats">
    <div class="blok">
        <i class="fa fa-money"></i>
        <div class="no">
            <p>Nombre de Formations</p>
            <p>{{ $number }}</p>
        </div>
    </div>
</div>



<div class="container">
    <form method="post" action="/register_formation">
        @csrf
        <div class="form-group">
          <input class="form-control" id="exampleFormControlInput1" placeholder="Le Libelle" name="libelle" type="text" 
          tabindex="1" required/>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">La Duree de la formation</label>
            <input class="form-control" id="exampleFormControlInput2" placeholder="Duree ( minutes )" name="duree" min="10"
             type="number" tabindex="1" required/>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Date Debut de la formation</label>
            <input class="form-control" id="exampleFormControlInput2" placeholder="date debut" name="date_debut" 
            type="datetime-local" tabindex="1" required/>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">La Description de la formation</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Le Referentiel de la Formation</label>
            <select class="form-control" name="referentiel_id" id="exampleFormControlSelect1" required>
              <option type="">...</option>
              @foreach($referentiels as $referentiel)
  
                <option value="{{ $referentiel->id }}">
                    {{ $referentiel->libelle }}
                </option>
  
              @endforeach
            </select>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="is_started" value="true" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Le Referentiel a commencé ?</label>
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
            <th scope="col">Description</th>
            <th scope="col">Referentiel</th>
            <th scope="col">Date de Debut</th>
            <th scope="col">Le Referentiel a commencé ?</th>
          </tr>
        </thead>
        <tbody>
            @foreach($formations as $r )
                <tr>
                    <th scope="row"> {{ $r->id }} </th>
                    <td>{{ $r->nom }}</td>
                    <td>{{ $r->description }}</td>
                    <td>{{ $r->referentiel->libelle }}</td>
                    <td>{{ $r->date_debut }}</td>
                    <td>{{ $r->is_started == 0 ? "oui" : "non" }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $formations->links() }}
</div>


@endsection