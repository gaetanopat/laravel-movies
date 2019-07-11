@extends('layouts.base')

@section('page_title', 'Inserimento film')

@section('content')
  <section class="show_single_movie">
    <div class="container">
      <h4>Inserimento nuovo film</h4>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="{{ route('movies.store') }}" method="post" id="create_movies_form">
        @csrf
        <div class="form-group row">
          <label class="col-5 col-form-label">Titolo film: </label>
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Inserisci titolo film" name="title" value="{{ old('title') }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Trama: </label>
          <div class="col-7">
            <textarea class="form-control" placeholder="Inserisci trama" name="plot">{{ old('plot') }}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Anno uscita: </label>
          <div class="col-7">
            <input type="number" class="form-control" placeholder="Inserisci anno uscita" name="release" value="{{ old('release') }}" min="1900" max="2019">
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Seleziona categoria: </label>
          <div class="col-7">
            <select class="form-control" name="genre_id">
              <option value="">Seleziona genere</option>
              @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group text-center">
          <input type="submit" value="Crea" class="btn btn-primary mr-2">
          <a href="{{ route('movies.index') }}" class="btn btn-primary">Torna alla Home</a>
        </div>
      </form>
    </div>
  </section>
@endsection
