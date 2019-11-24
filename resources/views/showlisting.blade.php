@extends('layouts.app')
@section('content')
<div class="col-md-5 mx-auto card pb-3">
  <p class="card-header">{{$list->name}}<span><a class="btn btn-sm btn-secondary" style="float:right;" href="{{url('/')}}">Go back</a></span></p>
    <ul class="list-group">
      <li class="list-group-item">Address: {{$list->address}}</li>
      <li class="list-group-item">Website: <a href="{{$list->website}}" target="_blank">{{$list->website}}</a></li>
      <li class="list-group-item">Email: {{$list->email}}</li>
      <li class="list-group-item">Phone: {{$list->phone}}</li>
    </ul>
    <div class="card">
      <p class="card-header">{{$list->bio}}</p>
    </div>
</div>
@endsection
