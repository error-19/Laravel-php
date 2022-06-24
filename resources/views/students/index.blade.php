@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8">
<form action=" " method="post">
@csrf 
<div class="mb-3">
    <label for="name" class="form-lebel">Name</label>
    <input type="text" class="form-control" id="name" name="name">
</div>
<div class="mb-3">
    <label for="email" class="form-lebel">Email</label>
    <input type="text" class="form-control" id="email" name="email">
</div>
<div class="mb-3">
    <label for="cell" class="form-lebel">Cell</label>
    <input type="text" class="form-control" id="cell" name="cell">
</div>
<div class="mb-3">
    <label for="name" class="form-lebel">Name</label>
    <input type="text" class="form-control" id="name" name="name">
</div>
<div type="submit"class="btn-btn-primary">Submit</div>
</form>
</div>
</div>
</div>



@endsection