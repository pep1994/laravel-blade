@extends('mainLayout')

@section('content')



    <div class="container">
        @isset($last_number)
            
            @for ($i = 1; $i <=  $last_number ; $i++)
                <div class="number">
                    {{ $i }}
                </div>
            @endfor
        @endisset

        @empty ($last_number)
            @for ($i = 1; $i < 100 ; $i++)
            <div class="number">
                {{ $i }}
            </div>
            @endfor
        @endempty
    </div>

@endsection