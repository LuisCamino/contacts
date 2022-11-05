@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Contact: {{ $contact->name}}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
              @csrf
              @method("PUT")
              <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                <div class="col-md-6">
                  <input id="name" type="text" value="{{ old('name') ?? $contact->name }}"
                    class="form-control @error('name') is-invalid  
                  @enderror" name="name" autofocus>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                </div>
              </div>

              <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-right">Phone number</label>

                <div class="col-md-6">
                  <input id="phone_number" type="tel" value="{{ old('phone_number') ?? $contact->phone_number }}"
                    class="form-control @error('phone_number') is-invalid  
                  @enderror"
                    name="phone_number"  autocomplete="phone_number">

                  @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                </div>
              </div>

              <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                <div class="col-md-6">
                  <input id="email" type="text" value="{{ old('email') ?? $contact->email }}"
                    class="form-control @error('email') is-invalid  
                  @enderror" name="email" 
                    autocomplete="email">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                </div>
              </div>


              <div class="row mb-3">
                <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>

                <div class="col-md-6">
                  <input id="age" type="text" value="{{ old('age') ?? $contact->age }}"
                    class="form-control @error('age') is-invalid  
                  @enderror" name="age" 
                    autocomplete="age">

                  @error('age')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
