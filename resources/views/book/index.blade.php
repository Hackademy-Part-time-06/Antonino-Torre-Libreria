<x-main>

    @if (session('success')) 
    Salvato correttamente
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
        
        @endforeach
    </ul>

</x-main>