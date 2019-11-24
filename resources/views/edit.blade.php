@extends('layouts.app')
@section('content')
<div class="col-md-5 mx-auto card pb-3">
  <p class="card-header">Edit listing <a href="{{url('dashboard')}}" style="float:right" class="btn btn-secondary btn-sm">Go back</a></p>
  {!!Form::open(['method'=>'POST','action'=>['ListingController@update',$list->id],'class'=>'form-group'])!!}
  {{ Form::bsText('name',$list->name,['placeholder'=>'please enter name']) }}
  {{ Form::bsText('website',$list->website,['placeholder'=>'please enter website']) }}
  {{ Form::bsEmail('email',$list->email,['placeholder'=>'please enter email']) }}
  {{ Form::bsText('phone',$list->phone,['placeholder'=>'please enter phone']) }}
  {{ Form::bsText('address',$list->address,['placeholder'=>'please enter address']) }}
  {{ Form::bsTextArea('bio',$list->bio,['placeholder'=>'please enter bio']) }}
  {{ Form::hidden('_method','PUT') }}
  {{ Form::bsSubmit('Edit',['class'=>'btn btn-sm btn-success mt-1']) }}
  {!!Form::close()!!}
</div>
@endsection
