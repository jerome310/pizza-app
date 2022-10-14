@extends('layouts.layout')

@section('content')
<div class="flex items-center justify-center h-screen flex-col">

<div class="text-6xl">Pizza List</div>

{{-- <p>{{$type}} - {{$base}} - {{$price}}</p> --}}

{{-- @for($i = 0; $i < count($pizzas); $i++)
       <p>{{ $pizzas[$i]['type'] }}</p>
@endfor --}}

@foreach($pizzas as $pizza)
   <div>
       {{$loop -> index}} {{ $pizza['type'] }} - {{ $pizza['base'] }}
         @if($loop->first)
         <span>- first in the loop</span>
         @endif
         @if($loop->last)
         <span>- last in the loop</span>
         @endif
      </div>
 @endforeach
   </div>
@endsection