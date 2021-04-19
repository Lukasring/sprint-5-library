@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Pavadinimas</th>
            <th>Autorius</th>
            <th>Puslapiai</th>
            <th>Apibudinimas</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->firstname . ' ' . $book->author->lastname }}</td>
            <td>{{ $book->pages }}</td>
            <td style="width: 30%">{{ $book->description }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection