<x-main>
    <form action="{{route('login') }}" method="POST" class="w-75 m-auto">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Indirizzo Email</label>
            <input type="email" class="form-control" value="{{old('email')}}" id="email" name="email" aria-describedby="email">
            @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" value="" name="password" id="password" id="exampleInputPassword1">
            @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="text-center">Non sei ancora registrato? <a href="{{route('register')}}"> Registrati</a></div>
</x-main>