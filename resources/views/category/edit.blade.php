<x-main>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('category.update', $category)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="name" class="form-label">Categoria</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
        @error('name')
        <span class="text-danger">
            {{$message}}
        </span>
        @enderror
        <button type="submit" class="btn btn-primary">Crea</button>
        <button type="submit" onclick="event.preventDefault();document.querySelector('#form-delete').submit();">Elimina</button>
    </form>
    <form action="{{route('Category.destroy',$category)}}" method="POST" id="form-delete">
        @method('DELETE')
        @csrf
    </form>
</x-main>