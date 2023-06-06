<x-main>
    <h2>Titolo: {{$libro['title']}}</h2>
    <img src="{{empty($libro->image) ? Storage::url('images/default.jpg'):Storage::url($libro->image)}}" alt="immagine">
</x-main>