<x-main>
    <form action="{{route('login') }}" method="POST">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" value="{{old('email')}}" id="email" name="email" aria-describedby="email">
            <div id="email" class="form-text">We'll never share your email with anyone else.</div>
            @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" value="" name="password" id="password" id="exampleInputPassword1">
            @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-main>