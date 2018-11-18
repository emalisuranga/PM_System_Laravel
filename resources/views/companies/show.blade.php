@extends('layouts.app')

@section('content')



        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
        <div class="jumbotron">
            <h1 class="display-3">{{$company->name}}</h1>
            <p>{{$company->description}}</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
          </div>


          <div class="row">
              @foreach ($company->projects as $project)
              <div class="col-md-4">
                    <h2>{{$project->name}}</h2>
                    <p>{{$project->description}}</p>
                    <p><a class="btn btn-primary" href="projects/{{$project->id}}" role="button">View details »</a></p>
                  </div>
              @endforeach
            </div>
        </div>

        <div class="col-md-3 col-lg-3 col-sm-3 pull-right">
            <div class="slidebar-module">
                <h4>Action</h4>
                <ol class="list-unstyled">
                    <li><a href="{{$company->id}}/edit">Edit</a></li>
                    <li><a href="/projects/create">Add Project</a></li>
                    <li><a href="/companies">List of Companies</a></li>
                    <li><a href="/companies/create">Add new member</a></li>
                    <br>

                    <li> <a href=""
                        onclick="var result=confirm('Are you sure?');
                        if(result){
                            event.preventDefault();
                            document.getElementById('logout-form').submit();
                        }">
                        Delete</a>
                        <form id="logout-form"  method="POST" action="/companies/{{ $company->id }}" style="dissplay: none;">
                            <input type="hidden" name="_method" value="Delete">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </li>
                </ol>
            </div>
        </div>
  

      @endsection