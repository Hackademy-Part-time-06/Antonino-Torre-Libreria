<x-main>
    <h2>{{$author->surname}}</h2>
    <h3>{{$author['name']}}</h3>
    @forelse ($author->books as $book)
        <h1>{{$book->title}}</h1>
        @empty
        <div>Nessun libro in registro</div>
    @endforelse 
</x-main>