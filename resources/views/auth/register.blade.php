@include('layouts.header')
<div class="card">
    <div class="card-body">
        <div class="border p-4 rounded">


            <div class="form-body">
                <form class="row g-3" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="col-sm-12">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>{{ __('Register') }}</button>
                        </div>
                    </div>
                    <div class="text-center">
                        <p>Already have an account? <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')