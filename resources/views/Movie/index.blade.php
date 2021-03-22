@extends('layouts.app')

@section('content')
    
<table class="table">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Lingua</th>
        <th scope="col">Diretto</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($movie as $film)
            <tr>
                <td>{{ $film -> name }}</td>
                <td>{{ $film -> language }}</td>
                <td>{{ $film -> directed_by }}</td>
          </tr>
          @endforeach
        </tbody>
  </table>
@endsection