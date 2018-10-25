@foreach($errors->all() as $error)
<div class="alert-layout">
  <div class="alert alert-success alert-layout--div" role="alert">
    <p>{{ $error }}</p>
  </div>
</div>
@endforeach
