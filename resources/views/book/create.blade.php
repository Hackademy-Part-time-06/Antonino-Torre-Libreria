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
    <form action="{{route('book.send')}}" method="POST" enctype="multipart/form-data" class="w-75 m-auto">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{old('title')}}" placeholder="Inserisci il titolo del libro">
            @error('title')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Pagine</label>
            <input type="number" class="form-control" id="pages" name="pages" aria-describedby="pages" value="{{old('pages')}}" placeholder="Inserisci il numero delle pagine del libro">
            @error('pages')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author_id" class="form-label">Autore</label>
            
            <select name="author_id" id="author_id" class="form-control">
                @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name . ' ' . $author->surname }}</option>
                @endforeach
            </select>
            @error('author_id')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Aggiungi un autore
              </button>
        </div>
        <div class="mb-3">
            <label for="categories" class="form-label">Categorie</label>
            
            
                @foreach($categories as $category)
                <div class="form-check">
                <input class="form-check-input" name="categories[]" type="checkbox" value="{{$category->id}}" id="categories">
                <label class="form-check-label" for="categories">
                  {{$category->name}}
                </label>
                </div>
                @endforeach

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categorie_modal">
                    Aggiungi un autore
                  </button>
            
            @error('category_id')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="number" class="form-control" id="year" name="year" aria-describedby="year" value="{{old('year')}}" placeholder="Inserisci l'anno del libro">
            @error('year')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image">Inserisci la copertina del libro</label> <br>
            <input type="file" name="image" id="image">
            @error('image')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</x-main>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Aggiungi un autore</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </form>
        </div>
          
      </div>
    </div>
  </div>

  <div class="modal fade" id="categorie_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Aggiungi un autore</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('category.send')}}" method="POST">
                @method('POST')
                @csrf
                <label for="name" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                @error('name')
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
                <button type="submit" class="btn btn-primary">Crea</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </form>
        </div>
          
      </div>
    </div>
  </div>