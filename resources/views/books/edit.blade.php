@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Pridėti Knygą:</div>
        <div class="card-body">
          <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf @method("PUT")
            <div class="form-group">
              <label>Title: </label>
              <input type="text" name="title" class="form-control" value="{{$book->title}}">
              @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label>Pages: </label>
              <input type="number" name="pages" class="form-control" value="{{$book->pages}}">
              @error('pages')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class=" form-group">
              <label>Autorius: </label>
              <select name="author_id" id="" class="form-control">
                @foreach ($authors as $author)
                <option value="{{ $author->id }}" @if($author->id == $book->author_id) selected="selected" @endif>{{ $author->firstname . ' ' . $author->lastname }}</option>
                @endforeach
              </select>
              @error('author_id')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label>Description: </label>
              <textarea name="description" class="form-control">{{$book->description}}</textarea>
              @error('description')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Pridėti</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection