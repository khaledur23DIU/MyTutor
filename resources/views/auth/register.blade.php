@extends('layouts.frontend.app', ['activePage' => 'register', 'titlePage' => __('Registration')])

@push('css')

@endpush

@section('content')

  <section id="login-section" class="text text-custom-p">
    <div class="container">
      <div class="login-reg-area p-5">
        <form action="{{ route('register') }}" method="POST">
          @csrf
          <div class="form-top text-center">
            <h3 class="mb-1 text-custom">{{ __('Registration')}}</h3>
            <br>
          </div>
          <div class="form-group">
            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="tel" class="form-control @error('contact_number') is-invalid @enderror" ng-model="contact-number" ng-disabled="AutoConfirmed" ng-pattern="/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/" placeholder="Contact e.g 01710555555" name="contact_number" id="contact-number" value="{{ old('contact_number') }}" required autocomplete="contact_number" autofocus>
            @error('contact_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="password" class="form-control mb-3 @error('password') is-invalid @enderror" placeholder="Password" name="password" id="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="password" class="form-control mb-3" placeholder="Retype Password" name="password_confirmation" id="password-confirm" required autocomplete="new-password">
          </div>
          <button type="submit" class="btn btn-custom btn-block btn-login mt-3">{{ __('Register')}}</button>
          <br>
          <div class="form-footer py-5 text-center">
            <p>{{__("Already have an account?")}} <a href="{{ route('login') }}">{{('Sign In')}}</a></p>
            <br>
            <small class="mt-3">{{('By signing up, you agree to our')}} <a href="#">{{('Term of Use and Privacy Policy')}}</a></small>
          </div>
        </form>
      </div>
    </div>
  </section>


@endsection

@push('js')

@endpush
