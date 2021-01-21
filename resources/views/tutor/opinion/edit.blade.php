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
                    <form action="{{ route('opinion.update',[Auth::user()->name, $opinion->id]) }}" method="POST">
                      @csrf
                      @method('PUT')
                        <div class="form-group">
                          
                          <textarea class="form-control mb-3 @error('opinion') is-invalid @enderror" rows="5" cols="50" id="opinion" name="opinion" placeholder="Write Your Opinion Here..." required>{!! $opinion->opinion !!}</textarea>
                          @error('opinion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <button class="btn btn-custom " type="submit">{{__('Update')}}</button>
                        <a class="btn btn-custom btn-danger" onclick="deleteOpinion({{ $opinion->id }})">{{__('Delete')}}</a>
                    </form>
                    <form id="delete-form-{{ $opinion->id }}" action="{{ route('opinion.destroy',[Auth::user()->name,$opinion->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

  <script type="text/javascript">
      function deleteOpinion(id) {
          swal({
              title: "{{__('Are you sure?')}}",
              text: "{{__('You wont be able to revert this!')}}",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: "{{('Yes, delete it!')}}",
              cancelButtonText: "{{('No, cancel!')}}",
              confirmButtonClass: 'btn btn-success',
              cancelButtonClass: 'btn btn-danger',
              buttonsStyling: false,
              reverseButtons: false
          }).then((result) => {
              if (result.value) {
                  event.preventDefault();
                  document.getElementById('delete-form-'+id).submit();
              } else if (
                  result.dismiss === swal.DismissReason.cancel
              ) {
                  swal(
                      "{{__('Cancelled')}}",
                      "{{__('Your data is safe :)')}}",
                      "{{__('error')}}"
                  )
              }
          })
      }
  </script>

@endpush

