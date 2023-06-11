<x-main>
    <ul>
    @forelse ($user->books as $book)
        <li>{{$book->title}}</li>
    @empty
        Non ha ancora aggiunto alcun libro
    @endforelse
    </ul>
</x-main>