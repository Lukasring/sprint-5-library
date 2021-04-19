@extends('layouts.app')
@section('content')
<div class="card-body">
  <table class="table">
    <tr>
      <th>Pavadinimas</th>
      <th>Autorius</th>
      <th>Puslapiai</th>
      <th>Apibudinimas</th>
      <th>Veiksmai</th>
    </tr>
    @foreach ($books as $book)
    <tr>
      <td>{{ $book->title }}</td>
      <td>{{ $book->author->firstname . ' ' . $book->author->lastname }}</td>
      <td>{{ $book->pages }}</td>
      <td style="width: 30%">{{ $book->description }}</td>
      <td>
        <form action={{ route('books.destroy', $book->id) }} method="POST">
          <a class="btn btn-success" href={{ route('books.edit', $book->id) }}>Redaguoti</a>
          @csrf @method('delete')
          <input type="submit" class="btn btn-danger" value="Trinti" />
        </form>
      </td>
    </tr>
    @endforeach
  </table>
  @if (session('status_success'))
  <div class="alert alert-success">
    <p style="color: green"><b>{{ session('status_success') }}</b></p>
  </div>
  @elseif(session('status_error'))
  <div class="alert alert-danger">
    <p style="color: red"><b>{{ session('status_error') }}</b></p>
  </div>
  @endif
  <div>
    <a href="{{ route('books.create') }}" class="btn btn-success">Pridėti</a>
  </div>
</div>
@endsection