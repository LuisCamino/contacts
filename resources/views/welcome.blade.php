@extends('layouts.app')

@push('scripts')
  <script src="{{ asset('js/welcome.js') }}" defer></script>
@endpush

@section('content')
  <div class="welcome d-flex align-items-center justify-content-center">
    <div class="text-center">
      <h1>Store Your Contacts Now</h1>
     
    </div>
  </div>
@endsection
