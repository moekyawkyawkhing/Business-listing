@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
           <div class="card">
              <p class="card-header">Dashboard <span><a style="float:right;" href="{{route('listing.create')}}" class="btn btn-sm btn-success">add listing</a></span></p>
              <h3 class="text-center">Your listings</h3>
              <table  class="table table-striped">
                <thead>
                  <th>Company</th>
                  <th></th>
                  <th></th>
                </thead>
                <tbody>
                  @if(count($list)>0)
                    @foreach($list as $lists)
                    <tr>
                      <td>{{$lists->name}}</td>
                      <td><a href="{{route('listing.edit',$lists->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                      <td>
                        {!!Form::open(['method'=>'POST','action'=>['ListingController@destroy',$lists->id],'style'=>'float:right','class'=>'form-group','onsubmit'=>'return confirm("Are you sure?")'])!!}
                        {{ Form::hidden('_method','DELETE') }}
                        {{ Form::bsSubmit('Delete',['class'=>'btn btn-sm btn-danger']) }}
                        {!!Form::close()!!}
                      </td>
                    </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
           </div>
        </div>
    </div>
@endsection
