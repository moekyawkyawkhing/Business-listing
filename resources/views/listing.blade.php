@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
           <div class="card">
              <p class="card-header">Latest Business Listings</p>
              <ul class="list-group">
                @if(count($list)>0)
                  @foreach($list as $lists)
                    <li class="list-group-item"><a href="{{url('listing/'.$lists->id)}}">{{$lists->name}}</li>
                  @endforeach
                @else
                No Business Listing
                @endif
              </ul>
           </div>
        </div>
    </div>
@endsection
