<x-main >
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('author.update' , ['author'=>$author->name])}}" method="POST" class="w-75 m-auto">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{$author->name}}" placeholder="Inserisci il nome dell'autore">
            @error('title')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="surname" name="surname" aria-describedby="surname" value="{{$author->surname}}" placeholder="Inserisci il cognome dell'autore">
            @error('author')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Nascita</label>
            <input type="date" class="form-control" id="birthday" name="birthday" aria-describedby="birthday" value="{{$author->birthday}}" placeholder="Data di sascita dell'autore">
            @error('year')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
        
        <button type="submit" onclick="event.preventDefault();document.querySelector('#form-delete').submit();">Cancella</button>
        
    </form>
    <form action="{{route('author.destroy', ['libro'=>$book->id])}}" method="POST" id="form-delete">
        @method('DELETE')
        @csrf
    </form>
</x-main>