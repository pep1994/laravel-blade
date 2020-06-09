@extends('mainLayout')

@section('content')
    @isset($name_home)
        <p> 
            {{ $name_home }}
        </p>
    @endisset
@endsection