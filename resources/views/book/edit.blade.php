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
    <form action="{{route('book.update' , ['libro'=> $book->id])}}" method="POST" enctype="multipart/form-data" class="w-75 m-auto">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{$book->title}}" placeholder="Inserisci il titolo del libro">
            @error('title')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author_id" class="form-label">Autore</label>
            
            <select name="author_id" id="author_id" class="form-control">
                @foreach($authors as $author)
                @if ($book->author->id == $author->id)
                    <option selected value="{{$author->id}}">{{ $author->name . ' ' . $author->surname }}</option>
                @endif
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
            <label for="category_id" class="form-label">Categoria</label>
            
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                @if ($book->category->id == $category->id)
                    <option selected value="{{$category->id}}">{{ $category->name}}</option>
                @endif
                <option value="{{ $category->id }}">{{ $category->name}}</option>
                @endforeach
            </select>
            @error('category_id')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Pagine</label>
            <input type="number" class="form-control" id="pages" name="pages" aria-describedby="pages" value="{{$book->pages}}" placeholder="Inserisci il numero delle pagine del libro">
            @error('pages')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="number" class="form-control" id="year" name="year" aria-describedby="year" value="{{$book->year}}" placeholder="Inserisci l'anno del libro">
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
        <button type="submit" class="btn btn-primary">Modifica</button>
        
        <button type="submit" onclick="event.preventDefault();document.querySelector('#form-delete').submit();">Cancella</button>
        
    </form>
    <form action="{{route('book.destroy', ['libro'=>$book->id])}}" method="POST" id="form-delete">
        @method('DELETE')
        @csrf
    </form>
</x-main>