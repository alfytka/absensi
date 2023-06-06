@extends('layouts.kerangka')
@section('content')
<div class="pagetitle mb-3">
  <h5 class="fw-semibold"><a type="button" onclick="history.back()" class="back-icon"><i class="bi bi-arrow-left back-icon"></i></a> <span class="ps-1">Data Pengajar</span></h5>
</div>
<section class="section dashboard">
  <div class="row">
    <div class="col-lg-4 mb-5">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Edit Pengajar</h5>
          <form class="row g-3" action="/pengajar" method="POST">
            @csrf
            <div class="col-12 px-3 px-md-2">
              <div class="form-group">
                <label for="id_guru" class="form-label mb-1">Guru Pengajar</label>
                <select name="id_guru" class="form-select @error('id_guru') is-invalid @enderror" id="id_guru">
                  <option disabled value>- Pilih guru pengajar -</option>
                  @foreach ($dataguru as $guru)
                    <option value="{{ $guru->id }}" {{ $guru->id == $pengajars->id_guru ? 'selected' : '' }}>{{ $guru->nama }}</option>
                  @endforeach
                </select>
                @error('id_guru')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-12 px-3 px-md-2">
              <div class="form-group">
                <label for="id_kelas" class="form-label mb-1">Nama Kelas</label>
                <select name="id_kelas" class="form-select @error('id_kelas') is-invalid @enderror" id="id_kelas">
                  <option disabled value>- Pilih kelas -</option>
                  @foreach ($datakelas as $kelas)
                    <option value="{{ $kelas->id }}" {{ $kelas->id == $pengajars->id_kelas ? 'selected' : '' }}>{{ $kelas->nama_kelas }}</option>
                  @endforeach
                </select>
                @error('id_kelas')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
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
                  <th scope="col">Guru Pengajar</th>
                  <th scope="col">Kelas</th>
                </tr>
              </thead>
              <tbody class="align-middle">
                @foreach ($datapengajar as $pengajar)
                <tr class="{{ $pengajar->id == $pengajars->id ? 'table-primary' : '' }}">
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $pengajar->guru->nama }}</td>
                  <td>{{ $pengajar->kelas->nama_kelas }}</td>
                  <div class="modal fade" id="datapengajar{{ $pengajar->id }}" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Konfirmasi</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Hapus pengajar <span class="fw-semibold fst-italic">{{ $pengajar->guru->nama }}</span> dan kelas yang diajarnya: <span class="fw-semibold fst-italic">{{ $pengajar->kelas->nama_kelas }}</span> dari daftar pengajar?<br>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <form action="/pengajar/{{ $pengajar->id }}" method="POST" class="m-0">
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