@extends('layouts.frontend.app', ['activePage' => 'login', 'titlePage' => __('Login')])

@push('css')

@endpush

@section('content')
  <!-- Login Section Start -->

  <section id="login-section" class="text text-custom-p">
    <div class="container">
      <div class="login-reg-area p-5">
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="form-top text-center">
            <h3 class="mb-1 text-custom">{{ __('Existing Member Sign In')}}</h3>
            <br>
          </div>
          <div class="form-group">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" id="name" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="password" class="form-control mb-3 @error('password') is-invalid @enderror" placeholder="Password" name="password" id="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="checkbox" class="mr-2 mt-3" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
          </div>
          <button type="submit" class="btn btn-custom btn-block btn-login mt-3">{{ __('Login')}}</button>
          
          @if (Route::has('password.request'))
              <a class="float-right mt-2" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
          @endif

          <br>
          <div class="form-footer py-5 text-center">
            <p>{{__("Don't have an account?")}} <a href="{{ route('register') }}">{{('Create Account')}}</a></p>
            <br>
            <small class="mt-3">{{('By signing up, you agree to our')}} <a href="#">{{('Term of Use and Privacy Policy')}}</a></small>
          </div>
        </form>
      </div>
    </div>
  </section>


@endsection

@push('js')
  {{-- expr --}}
@endpush
