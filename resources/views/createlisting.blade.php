@extends('layouts.app')
@section('content')
<div class="col-md-5 mx-auto card pb-3">
  <p class="card-header">Create listing</p>
  {!!Form::open(['method'=>'POST','action'=>'ListingController@store','class'=>'form-group'])!!}
  {{ Form::bsText('name','',['placeholder'=>'please enter name']) }}
  {{ Form::bsText('website','',['placeholder'=>'please enter website']) }}
  {{ Form::bsEmail('email','',['placeholder'=>'please enter email']) }}
  {{ Form::bsText('phone','',['placeholder'=>'please enter phone']) }}
  {{ Form::bsText('address','',['placeholder'=>'please enter address']) }}
  {{ Form::bsTextArea('bio','',['placeholder'=>'please enter bio']) }}
  {{ Form::bsSubmit('Create',['class'=>'btn btn-sm btn-success mt-1']) }}
  {!!Form::close()!!}
</div>
@endsection
