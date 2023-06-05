<x-main>
    <a href="{{route('category.create')}}"><button>Aggiungi categoria</button> </a>

    <ul>
        @foreach ($categories as $category)
            <li>{{$category['name']}}<a href="{{route('category.show',$category)}}"><button></button></a></li>
        @endforeach
    </ul>
</x-main>