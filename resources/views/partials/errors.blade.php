@if(isset($errors)&&count($errors)> 0)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{!!session()->get('success')!!}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>

      @foreach ($errors as $error)
      <li><strong>{!!$error!!}</strong></li>    
      @endforeach
    </button>
  </div>
  @endif