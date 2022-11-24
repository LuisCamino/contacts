@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Contact: {{ $contact->name}}</div>

          <div class="card-body">
                <p>Name: {{ $contact->name }}</p>
                <p>Email: {{ $contact->email }}</p>
                <p>Age: {{ $contact->age }}</p>
                <p>Phone number: <a href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a></p>
                <p>created: {{ $contact->created_at }}</p>
                <p>updated: {{ $contact->updated_at }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
