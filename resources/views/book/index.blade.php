<x-main>
    
    @if (session('success')) 
    {{session('success')}}
    @endif
    <ul>
        @foreach ($books as $book)
        
        <li class="position-relative">
            <a href="{{route('book.show',['libro'=>$book])}}">
                <picture class="d-flex justify-content-center">
                    <img src="/libro.png" alt="libro"> 
                    <span class="position-absolute bottom-50 text-center">{{$book['title']}} - {{$book['author']}}</span>
                </picture>
            </a>
        </li>   
        <a href="{{route('book.edit',['libro'=>$book->id])}}"><button>Modifica</button></a>
        @endforeach
    </ul>
    
</x-main>