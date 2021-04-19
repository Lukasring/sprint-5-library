@extends('layouts.app')
@section('content')
<div class="card-body">
  @if($errors->any())
  <div class="alert alert-danger">
    <p><b>{{$errors->first()}}</b></p>
  </div>
  @endif

  <table class="table">
    <tr>
      <th>Vardas</th>
      <th>Pavardė</th>
      <th>Knygų sk.</th>
      <th>Veiksmai</th>
    </tr>
    @foreach ($authors as $author)
    <tr>
      <td>{{ $author->firstname }}</td>
      <td>{{ $author->lastname }}</td>
      <td>{{ count($author->books) }}</td>
      <td>
        <form action={{ route('authors.destroy', $author->id) }} method="POST">
          <a class="btn btn-success" href={{ route('authors.edit', $author->id) }}>Redaguoti</a>
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
    <a href="{{ route('authors.create') }}" class="btn btn-success">Pridėti</a>
  </div>
</div>
@endsection