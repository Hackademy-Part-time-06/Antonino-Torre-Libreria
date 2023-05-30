<x-main>

@if (session('success')) 
Salvato correttamente
@endif
    <ul>
        @foreach ($books as $book)
        <a href="{{route('show',['libro'=>$book])}}">
            <li>{{$book['title']}} - {{$book['author']}}</li>   
        </a>         
        @endforeach
    </ul>
</x-main>