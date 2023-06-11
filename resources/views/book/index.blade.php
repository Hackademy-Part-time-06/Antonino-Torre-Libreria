<x-main>
    
    @if (session('success')) 
    {{session('success')}}
    @endif
    <ul>
        Guarda i libri inseriti da:
        @foreach ($users as $user)
            <a href="{{route('book.user', ['user'=>$user])}}"><li>{{$user->name}}</li></a>
        @endforeach
    </ul>
    <ul>
        @foreach ($books as $book)
        
        <li class="position-relative">
            <a href="{{route('book.show',['libro'=>$book])}}">
                <picture class="d-flex justify-content-center">
                    <img src="/libro.png" alt="libro"> 
                    <span class="position-absolute bottom-50 text-center">{{$book['title']}} -{{$book->author['surname']}} {{$book->author['name']}}</span>
                </picture>
            </a>
        </li>   
        @if (Auth::user()== $book->user)
        
            <a href="{{route('book.edit',['libro'=>$book->id])}}"><button>Modifica</button></a>
            @else
            <div>non puoi modificare</div>
        @endif
        @endforeach
    </ul>
    
</x-main>