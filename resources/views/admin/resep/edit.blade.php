@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Resep</h4>
        <form action="{{ route('resep.update', $reseps->id) }}" method="post">
            @csrf
            @method('put')
          <div class="form-group">
            <label>User</label>
            <select name="user_id"
              class="form-control @error('user_id') is-invalid @enderror" readonly>
              @foreach ($users as $user)               
                <option value="{{ $user->id }}">{{ $user->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Kota</label>
            <select name="kota_id"
              class="form-control @error('kota_id') is-invalid @enderror" readonly>
              @foreach ($kotas as $kota)               
                <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" value="{{ $reseps->judul }}" readonly>
          </div>
          <div class="form-group">
            <label>Gambar Makanan</label>
            <input type="file" class="form-control" name="gambar_resep" value="{{ $reseps->gambar_resep }}" readonly>
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" cols="30" rows="7"
              class="form-control mb-2  @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi" readonly
            >{{ $reseps->deskripsi }}</textarea>
          </div>
          <div class="form-group">
            <label>Bahan-Bahan</label>
            <textarea name="bahan_bahan" cols="30" rows="7"
              class="form-control mb-2  @error('bahan_bahan') is-invalid @enderror" placeholder="Bahan-Bahan" readonly
            >{{ $reseps->bahan_bahan }}</textarea>
          </div>
          <div class="form-group">
            <label>Langkah-Langkah</label>
            <textarea name="langkah_langkah" cols="30" rows="7"
              class="form-control mb-2  @error('langkah_langkah') is-invalid @enderror" placeholder="Langkah-Langkah" readonly
            >{{ $reseps->langkah_langkah }}</textarea>
          </div>
          <input type="radio" name="status" value="Setuju"> Setuju<br>
          <input type="radio" name="status" value="Tolak"> Tolak
          <div class="form-check form-check-flat form-check-primary">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection