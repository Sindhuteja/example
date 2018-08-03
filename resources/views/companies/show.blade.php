@extends('layouts.app')
@section('content')

    <div class="col-md-9 col-lg-9 col-sm-3 pull-left">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>{{ $company->name }}</h1>
        <p class="lead">{{ $company->description }}</p>
<!--        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>-->
      </div>

      <!-- Example row of columns -->
      <div class="row" style="background:white;margin:10px">
        @foreach($company->projects as $project)
        <div class="col-lg-4">
          <h2>{{ $project->name}}</h2>
          <p class="text-danger">{{ $project->description}}</p>
          <p><a class="btn btn-primary" href="/projects/{{ $project->id }}"role="button">View project »</a></p>
        </div>
        @endforeach
      <!-- Site footer -->
     
</div>
</div>
<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          
<div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{ $company->id}}/edit">Edit</a></li>
              <li><a href="/projects/create">add project</a></li>
              <li><a href="/companies">list of companies</a></li>
              <li><a href="/companies/create">create new company</a></li><br>
              <li><a href="#">delete</a></li>
              
            </ol>
          </div>

          
          
        </div>
@endsection
     <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  

