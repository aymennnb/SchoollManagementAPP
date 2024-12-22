<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('partials.nav')
    <h1>Bonjour {{$nom}}</h1>
        {{-- @unless(count($langues)==0)
        <ul>
            @foreach ($langues as $langue)
                <li>{{$langue}}</li> 
            @endforeach 
        </ul>
        @else
        <h3>pas de cours maintenant</h3>   
        @endunless --}}

        <!-- Methode 2 -->
        
        {{-- @empty($langues)
        <h3>pas de cours maintenant</h3>   
        @else
        <ul>
            @foreach ($langues as $langue)
                <li>{{$langue}}</li> 
            @endforeach 
        </ul>
        @endempty
        @switch($color)
        @case('red')
            the color is red
            @break
        @case('black')
            the color is black
            @break
        @default 
            nothing
        @endswitch --}}    
</body>
</html>