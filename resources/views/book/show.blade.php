<x-main>
    <div class="d-flex flex-column align-items-center">
        <h2 class="m-5">Titolo: {{$libro['title']}}</h2>
        <img src="{{empty($libro->image) ? Storage::url('images/default.jpg'):Storage::url($libro->image)}}" alt="immagine" class="m-5 img-fluid">
        <div class="m-2">Anno 1ª pubblicazione: {{$libro['year']}}</div>
        <div class="m-2 text-end">Pagine: {{$libro['pages']}}</div>
        <div> {{$libro->author->name}}</div>
        <div>{{$libro->category->name}}</div>
        <div>Creato da : {{$libro->user->name ?? "Ignoto"}}</div>
    </div>
    
</x-main>