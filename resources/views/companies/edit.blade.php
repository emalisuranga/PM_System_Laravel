@extends('layouts.app')

@section('content')
        <div class="col-md-9 col-lg-9 col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">EDIT</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/companies/{{ $company->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                           
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$company->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Discription</label>

                            <div class="col-md-6">
                                        <textarea type="text" class="form-control" id="description" name='description' rows="5" required>{{$company->description}}</textarea>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-lg-3 col-sm-3 pull-right">
                <div class="slidebar-module">
                    <h4>Action</h4>
                    <ol class="list-unstyled">
                        <li><a href="companies/{{$company->id}}">View Company</a></li>
                        <li> <a href="/companies">All Company</a></li>
                    </ol>
                </div>
            </div>
        
@endsection
