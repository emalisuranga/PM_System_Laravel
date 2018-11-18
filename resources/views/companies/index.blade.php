@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
        <div class="card" >
                <div class="card-header">
                  Company
                    <a class="pull-right btn btn-primary btn-sm" href="/companies/create">Create New Company</a>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($companies as $company)
                    <li class="list-group-item"><a href="companies/{{$company->id}}">{{$company->name}}</a></li>
                    @endforeach
                </ul>
              </div>
</div>

  @endsection