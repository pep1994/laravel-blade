@extends('mainLayout')

@section('content')

    <h2>questo è la pagina contacts</h2>

    @isset($contacts)
        @foreach ($contacts as $contact)
            <p> {{$contact}} </p>
        @endforeach  
    @endisset
@endsection