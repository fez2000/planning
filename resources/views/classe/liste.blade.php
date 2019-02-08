
@extends('layouts.app')

@section('title', 'Classe')
@section('css')
  <!-- liens css -->
@endsection
@section('sidebar')
    @parent

    @section('menu')
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a class = "orientation" href="/"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
            <li><a class = "orientation" href="/salle"><span class ="glyphicon glyphicon-inbox"></span> &nbsp;Nos Salles</a></li>
            <li ><a class = "orientation" href="/materiel"><span class ="glyphicon glyphicon-scissors"></span> &nbsp;Materiels</a></li>
            <li ><a class = "orientation" href="/enseignant"><span class ="glyphicon glyphicon-briefcase"></span> &nbsp;Enseignant</a></li>
            <li class="active"><a class = "orientation" href="/classe"><span class ="glyphicon glyphicon-briefcase"></span> &nbsp;Classe</a></li>
            <li><a class = "orientation" href="/temps"><span class ="glyphicon glyphicon-briefcase"></span> &nbsp;Emplois de temps</a></li>
          </ul>
        </div><!--/.nav-collapse -->
     
    @endsection
  @endsection
@section('content')

<div class="container" style="margin-top:70px;">
  <div class="row">
    <div class="col-md-3">
    <div class="list-group">
          <button type="button" class="list-group-item list-group-item-action active classe br" onClick="search_classe({{$classes}})">
            Rechercher
          </button>
      


         @foreach($classes as $classe)
 
            <button type="button"  id="{{'c'.$classe->id}}" class="list-group-item list-group-item-action classe" onClick="planning_classe({{$classe->id}},'{{$classe->nom}}')"    title="{{$classe->nom}}"> 
              {{$classe->code}}
            </button>
        @endforeach
      </div>
    </div>
    <div class="col-md-9 recherche">
      <form>
      <center><h1 id="titreC">RECHERCHE</h1></center><br/>
        <input type="search" class="form-control col-md-12 col-xs-8" placeholder="entrez le nom ou le code d'une classe"/>
      </form>
    </div>
    <div class="col-md-9 calendrier">
      <center><h1 id="titreC"></h1></center><br/>
    <div class="table-responsive">
      <table class="table table-bordered" id="listePC">
    
      </table>
    </div>
    </div>
    </div>
</div>

@endsection
@section('js')
  <!-- liens js -->
  <script src="js/classe.js"></script>
@endsection