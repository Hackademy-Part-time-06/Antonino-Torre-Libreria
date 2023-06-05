<x-main>
    <h2>Titolo: {{$libro['title']}}</h2>
    <img src="{{Storage::url($libro['image'])}}" alt="immagine">
</x-main>