@extends('layouts.base')

@section('page_title', 'Visualizzazione Film')

@section('content')
  <section class="show_all_movies">
    <div class="container">
      <h3 class="float-left">Visualizzazione film</h3>
      <a href="{{ route('movies.create') }}" class="btn btn-primary float-right">Aggiungi film</a>
      <table>
        <tr>
          <th class="text-center">Titolo film</th>
          <th class="text-center">Trama</th>
          <th class="text-center">Anno uscita</th>
          <th class="text-center">Genere</th>
        </tr>
        @forelse ($movies as $movie)
        <tr>
          <td class="text-center">{{ $movie->title }}</td>
          <td class="text-center">
            @if ($movie->plot)
                {{ $movie->plot }}
            @else
              -
            @endif
          </td>
          <td class="text-center">{{ $movie->release }}</td>
          <td class="text-center">
            @if ($movie->genre)
              {{ $movie->genre->name }}
              @else
                Non disponibile
            @endif
          </td>
        </tr>
    @empty
      <tr>
        <td colspan="6" class="no_movies"><h1>Non ci sono film</h1></td>
      </tr>
    @endforelse
      </table>

    </div>
  </section>
@endsection
