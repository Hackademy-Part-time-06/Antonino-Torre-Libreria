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
    <form action="{{route('author.store')}}" method="POST" enctype="multipart/form-data" class="w-75 m-auto">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{old('name')}}" placeholder="Inserisci il nome dell'autore">
            @error('title')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="surname" name="surname" aria-describedby="surname" value="{{old('surname')}}" placeholder="Inserisci il cognome dell'autore">
            @error('author')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Nascita</label>
            <input type="date" class="form-control" id="birthday" name="birthday" aria-describedby="birthday" value="{{old('birthday')}}" placeholder="Data di sascita dell'autore">
            @error('year')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</x-main>