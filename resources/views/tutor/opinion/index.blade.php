@extends('layouts.frontend.app', ['activePage' => 'opinion', 'titlePage' => __('OPINION')])

@push('css')

@endpush

@section('content')
<div class="tutor-hub-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tutor-search">
                    <h3>Your Opinion</h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tutor-filter">
                    <form action="{{ route('opinion.store',Auth::user()->name) }}" method="POST">
                      @csrf
                        <div class="form-group">
                          <textarea class="form-control mb-3 @error('opinion') is-invalid @enderror" rows="5" cols="50" id="opinion" name="opinion" placeholder="Write Your Opinion Here..." required>{{ old('opinion') }}</textarea>
                          @error('opinion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                        </div>
                        <button class="btn btn-custom " type="submit">{{__('Submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

@endpush

