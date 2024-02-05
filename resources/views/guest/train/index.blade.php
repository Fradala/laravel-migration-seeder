@extends('layout.app')
    <h2>
        treni
    </h2>
    <ul>
        @forelse ($trains as $train )
            <li>
                {{ $train->name }} : {{ $train->stazione_partenza }} - {{ $train->stazione_arrivo }}
                {{ $train->orario_partenza }} - {{ $train->orario_arrivo }}
                {{ $train->in_orario }} - {{ $train->cancellato }}
            </li>
        
        @empty
        
        @endforelse
    </ul>
    

 
@section('main-content')

@endsection