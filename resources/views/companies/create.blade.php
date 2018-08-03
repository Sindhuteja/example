@extends('layouts.app')
@section('content')

    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      

      <!-- Jumbotron -->
      

      <!-- Example row of columns -->
      <div class="row col-md-8 col-lg-8 col-sm-9" style="background:white">
           <form method="post" action="{{ route('companies.store')}}">
            {{ csrf_field()}}
             <input type="hidden" name="_method" value="put" >
  <div class="form-group col-md-12">          
              <label for="company-name">Name<span class="required">*</span></label>

              <input placeholder="Enter name"
              id="company-name"
              required
              name="description"
              spellcheck="false"
              class="form-control"
              
>
             </div>
           

           <div class="form-group col-md-12">
              <label for="company-content">Description</label>
              <textarea placeholder="Enter description"
              
              id="company-content"
              name="description"
              rows="5"
              spellcheck="false"
              class="form-control autosize-target text-left">
              
              </textarea>

             </div>

             <div class="form-group col-md-8">
              <input type="submit" class="btn btn-primary"
              value="submit"/></div>








           </form>       
        </div>
        
      <!-- Site footer -->
     
</div>

<div class="col-sm-2 col-md-2 col-lg-2 pull-right">
          
<div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies">view list of companies</a></li>
           
            </ol>
          </div>

         <!-- <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              
            </ol>
          </div>-->
          
        </div>
@endsection