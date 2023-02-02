        @extends('layout.main')

        @section('title', 'Ac Events')

        @section('content')

         <h1>Assassins Creed</h1>
            @if(10 > 5)
                <p>A condição é true</p>
            @endif
        <p>{{ $nome }}</p>

        @if($nome == "Wesley")
        <p>O nome é Wesley</p>
        @elseif($nome == "Matheus")
        <p>O nome é {{$nome}}</p>
        @else
        <p>O nome ñ é Matheus</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if($i == 2)
        <p>O i é 2</p>
        @endif
        @endfor
   
        @endsection