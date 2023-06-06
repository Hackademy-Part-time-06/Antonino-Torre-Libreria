<x-main>
    <ul>
    @foreach ($authors as $author)
        <li>{{$author['name']}} - {{$author['surname']}}</li> 
        <a href="{{route('author.show',['autore'=>$author])}}"><button>Dettagli</button></a>
        <a href="{{route('author.edit',['autore'=>$author])}}"><button>Modifica</button></a>
    @endforeach
</ul>
    <a href="{{route('author.create')}}"><button>Aggiungi autore</button></a>
    
</x-main>