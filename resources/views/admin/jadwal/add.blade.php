@extends('layouts.kerangka')
@section('content')
<div class="pagetitle mb-3">
  <h5 class="fw-semibold"><a type="button" onclick="history.back()" class="back-icon"><i class="bi bi-arrow-left back-icon"></i></a> <span class="ps-1">Jadwal Pembelajaran</span></h5>
</div>
<section class="section dashboard mb-5">
  <div class="row">
    <div class="col-lg-9">
      <div class="card shadow-sm bg-white">
        <div class="card-body">
          <h5 class="card-title ms-2">Tambah Jadwal</h5>
          <form class="row g-3 mx-0 mx-md-1 mx-lg-1 mb-3" action="{{ route('jadwal-pembelajaran.store') }}" method="POST">
            @csrf
            <div class="col-12 col-md-6 col-lg-6 pe-2 pe-md-3 pe-lg-3">
              <div class="form-group">
                <label for="id_pengajar" class="form-label mb-1">Guru Pengajar</label>
                <select name="id_pengajar" class="form-select @error('id_pengajar') is-invalid @enderror" id="id_pengajar">
                  <option disabled value>- Pilih guru pengajar -</option>
                  @foreach ($dataguru as $guru)
                    <option disabled selected hidden>- Pilih guru pengajar -</option>
                    <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
                  @endforeach
                </select>
                @error('id_pengajar')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mt-3">
                <label for="id_mapel" class="form-label mb-1">Mata Pelajaran</label>
                <select name="id_mapel" class="form-select @error('id_mapel') is-invalid @enderror" id="id_mapel">
                  <option disabled value>- Pilih mata pelajaran -</option>
                  @foreach ($mapels as $mapel)
                    <option disabled selected hidden>- Pilih mata pelajaran -</option>
                    <option value="{{ $mapel->id }}">{{ $mapel->nama_mapel }}</option>
                  @endforeach
                </select>
                @error('id_mapel')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group my-3">
                <label for="hari" class="form-label mb-1">Hari</label>
                <select name="hari" class="form-select @error('hari') is-invalid @enderror" id="hari">
                  <option disabled value>- Pilih hari -</option>
                  <option disabled selected hidden>- Pilih hari -</option>
                  <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jum'at">Jum'at</option>
                  <option value="Sabtu">Sabtu</option>
                </select>
                @error('hari')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              
            </div>
            
            <div class="col-12 col-md-6 col-lg-6 ps-2 ps-md-3 ps-lg-3 mt-0 mt-md-3 mt-lg-3">
              <div class="form-group mb-3">
                <label for="jam_mulai" class="form-label mb-1">Jam Mulai</label>
                <select name="jam_mulai" class="form-select @error('jam_mulai') is-invalid @enderror" id="jam_mulai">
                  <option disabled value>- Pilih jam mulai -</option>
                  <option disabled selected hidden>- Pilih jam mulai -</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                @error('jam_mulai')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="jam_selesai" class="form-label mb-1">Jam Mulai</label>
                <select name="jam_selesai" class="form-select @error('jam_selesai') is-invalid @enderror" id="jam_selesai">
                  <option disabled value>- Pilih jam mulai -</option>
                  <option disabled selected hidden>- Pilih jam mulai -</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                @error('jam_selesai')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="text-end ">
                <button type="submit" class="btn btn-sm btn-primary py-2 px-3 mb-3 rounded-3 fw-bold">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection