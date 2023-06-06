@extends('layouts.kerangka')
@section('content')
<div class="pagetitle mb-3">
  <h5 class="fw-semibold"><a type="button" onclick="history.back()" class="back-icon"><i class="bi bi-arrow-left back-icon"></i></a> <span class="ps-1">Data Guru</span></h5>
</div>
<section class="section dashboard mb-5">
  <div class="row">
    <div class="col-lg-9">
      <div class="card shadow-sm bg-white">
        <div class="card-body">
          <h5 class="card-title ms-2">Edit Data Guru</h5>
          <form class="row g-3 mx-0 mx-md-1 mx-lg-1 mb-3" action="/guru/{{ $guru->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-12 col-md-6 col-lg-6 pe-2 pe-md-3 pe-lg-3">
              <div class="form-group mb-3">
                <label for="nip" class="form-label mb-1">NIP</label>
                <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ $guru->nip, old('nip') }}" placeholder="Masukkan nip" id="nip" autocomplete="off">
                @error('nip')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="nama" class="form-label mb-1">Nama Guru</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $guru->nama, old('nama') }}" placeholder="Masukkan nama siswa" id="nama" autocomplete="off">
                @error('nama')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="role" class="form-label mb-1">Role</label>
                <select name="role" class="form-select @error('role') is-invalid @enderror" id="role">
                  <option disabled value>- Pilih role -</option>
                  <option value="guru" {{ $guru->role == 'guru' ? 'selected' : '' }}>Guru</option>
                  <option value="guru" {{ $guru->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
                @error('role')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="jenis_kelamin" class="form-label mb-1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin">
                  <option disabled value>- Jenis kelamin -</option>
                    <option value="laki-laki" {{ $guru->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="perempuan" {{ $guru->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('jenis_kelamin')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-6 ps-2 ps-md-3 ps-lg-3 mt-0 mt-md-3 mt-lg-3">
              <div class="form-group mb-3">
                <label for="email" class="form-label mb-1">Email</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $guru->email, old('email') }}" placeholder="contoh@mail.com" id="email" autocomplete="off">
                @error('email')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="password" class="form-label mb-1">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Masukkan password baru" id="password" autocomplete="off">
                @error('password')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="telepon" class="form-label mb-1">Telepon</label>
                <input type="text" name="telepon" class="form-control @error('telepon') is-invalid @enderror" value="{{ $guru->telepon, old('telepon') }}" placeholder="XXXX XXXX XXXX" id="telepon" autocomplete="off">
                @error('telepon')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="alamat" class="form-label mb-1">Alamat</label>
                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $guru->alamat, old('alamat') }}" placeholder="Masukkan alamat" id="alamat" autocomplete="off">
                @error('alamat')
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