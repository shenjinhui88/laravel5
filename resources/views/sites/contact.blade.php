@extends('app')
@section('content')
    <h1>name is contact</h1><br >
@stop
@if(!empty($people)){
<ul>
    @foreach($people as $person)
        <li>{{$person}}</li>
    @endforeach
</ul>
}@endif
@section('footer')

    <script>alert('contact');</script>
@stop

