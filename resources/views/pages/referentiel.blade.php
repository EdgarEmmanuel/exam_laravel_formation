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
    <form method="post" action="/register_referentiel">
        @csrf
        <div class="form-group">
          <input class="form-control" id="exampleFormControlInput1" placeholder="Le Libelle" name="libelle" type="text" 
          tabindex="1" required/>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Le Type du Referentiel</label>
            <select class="form-control" name="type_id" id="exampleFormControlSelect1" required>
              <option type="">...</option>
              @foreach($types as $type)
  
                <option value="{{ $type->id }}">
                    {{ $type->libelle }}
                </option>
  
                @endforeach
            </select>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="is_validated" value="true" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Le Referentiel est validé ?</label>
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
            <th scope="col">Type du Referentiel</th>
            <th scope="col">Le Referentiel est validé ?</th>
          </tr>
        </thead>
        <tbody>
            @foreach($referentiels as $r )
                <tr>
                    <th scope="row"> {{ $r->id }} </th>
                    <td>{{ $r->libelle }}</td>
                    <td>{{ $r->type->libelle }}</td>
                    <td>{{ $r->validated == 0 ? "non" : "oui" }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $referentiels->links() }}
</div>


@endsection