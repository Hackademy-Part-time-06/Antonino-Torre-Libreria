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
        </div>
        <div class="mb-3">
            <label for="author_id" class="form-label">Categoria</label>
            
            <div class="form-check">
                @foreach($categories as $category)
                <input class="form-check-input" name="categories[]" type="checkbox" value="{{$category->id}}" id="categories">
                <label class="form-check-label" for="categories">
                  {{$category->name}}
                </label>
              </div>
                @endforeach
              </div>
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