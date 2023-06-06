@extends('layouts.kerangka')
@section('content')
<div class="pagetitle mb-3">
  <h5 class="fw-semibold"><a type="button" onclick="history.back()" class="back-icon"><i class="bi bi-arrow-left back-icon"></i></a> <span class="ps-1">Data Kelas</span></h5>
</div>
<section class="section dashboard">
  <div class="row">
    <div class="col-lg-4 mb-5">
      <div class="card shadow-sm" id="q">
        <div class="card-body">
          <h5 class="card-title">Edit Kelas</h5>
          <form class="row g-3" action="/kelas/{{ $kelasf->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-12 px-3 px-md-2">
              <label for="nama_kelas" class="form-label mb-1">Nama Kelas</label>
              <input type="text" name="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror" value="{{ $kelasf->nama_kelas, old('nama_kelas') }}" placeholder="Masukkan nama kelas" id="nama_kelas" autocomplete="off">
              @error('nama_kelas')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="text-end px-3 px-md-2">
              <button type="submit" class="btn btn-sm btn-primary py-2 px-3 mb-3 rounded-3 fw-bold">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      @if (session()->has('info'))
        <div class="alert text-primary border-light rounded-3 alert-primary alert-dismissible fade show" role="alert">
          <i class="bi bi-check-circle-fill ms-1 py-0 my-0 me-2"></i>
          <span>{{ session('info') }}</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif 
      <div class="card shadow-sm bg-white">
        <div class="card-body">
          <div class="table-responsive mt-2 mt-md-3 mt-lg-4">
            <table class="table table-sm table-striped table-hover" id="table1">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Kelas</th>
                </tr>
              </thead>
              <tbody class="align-middle">
                @foreach ($datakelas as $kelas)
                <tr class="{{ $kelas->id == $kelasf->id ? 'table-primary' : '' }}">
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $kelas->nama_kelas }}</td>
                  <div class="modal fade" id="datakelas{{ $kelas->id }}" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Konfirmasi</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Hapus kelas <span class="text-violet fw-semibold fst-italic">{{ $kelas->nama_kelas }}</span> dari daftar kelas?<br>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <form action="/kelas/{{ $kelas->id }}" method="POST" class="m-0">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('my-js')
  <script src="/vendor/extensions/simple-datatables/umd/simple-datatables.js"></script>
  <script src="/vendor/extensions/simple-datatables.js"></script>
@endsection