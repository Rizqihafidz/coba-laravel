@extends('layouts.main')

@section('container')

<h1 class = "mb-5">Galeri Album</h1>

<div class="row mb-4">

  @if($albums->count())

  @foreach ($albums as $album)

    <div class="col-md-4 mb-4">
        <div id="carousel{{ $album->id }}" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ $album->sampul }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ $album->sampul }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ $album->sampul }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $album->id }}" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $album->id }}" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div class="card-body ">
            <h5 class="card-title text-align-center">{{ $album->nama }}</h5>
            <p>
              <small>
                  {{$album->keterangan}}
              </small>
              </p>
            <p class="card-text">{{ $album->created_at->isoFormat('dddd, D MMMM Y') }}</p>
            <a href="/galeri/{{ $album->slug }}" class="btn btn-primary">Lihat semua...</a>
          </div>
    </div>

    @endforeach

    @else
      <p class="text-center fs-4">Belum ada data.</p>
    @endif
    

    

    
</div>




@endsection