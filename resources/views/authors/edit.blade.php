@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Redaguoti autoriaus informaciją</div>
        <div class="card-body">
          <form method="POST" action="{{ route('authors.update', $author->id) }}">
            @csrf @method("PUT")
            <div class="form-group">
              <label for="">Vardas</label>
              <input type="text" name="firstname" class="form-control" value="{{ $author->firstname }}">
              @error('firstname')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Pavardė</label>
              <input type="text" name="lastname" class="form-control" value="{{ $author->lastname }}">
              @error('lastname')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Pakeisti</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection