<x-main>
    <a href="{{route('category.create')}}"><button>Aggiungi categoria</button> </a>

    <ul>
        @foreach ($categories as $category)
            <li>{{$category['name']}}
                <a href="{{route('category.show',$category)}}"><button>Dettagli</button></a>
                <a href="{{route('category.edit',$category)}}"><button>Modifica</button></a>
            </li>
        @endforeach
    </ul>
</x-main>