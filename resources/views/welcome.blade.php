<x-main>
    
    @if (session('success')) 
    Salvato correttamente
    @endif
    <ul>
        @foreach ($books as $book)
        
        <li>
            <a href="{{route('show',['libro'=>$book])}}">
                <picture>
                    <img src="public\storage\images\libro.png" alt="libro"> 
                    <span>{{$book['title']}} - {{$book['author']}}</span>
                </picture>
            </a>
        </li>   
        
        @endforeach
    </ul>
</x-main>