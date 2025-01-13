@extends('adminpus.index')

@section('content')
<div class="pagetitle">
    <h1>Tambah Lembaga</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('lembaga.index') }}">Lembaga</a></li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Tambah Lembaga</h5>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('lembaga.store') }}" method="POST">
                        @csrf
                        
                        <!-- Nama Lembaga -->
                        <div class="mb-3">
                            <label for="nama_lembaga" class="form-label">Nama Lembaga</label>
                            <input type="text" name="nama_lembaga" class="form-control" value="{{ old('nama_lembaga') }}" required>
                        </div>

                        <!-- Nama Perpustakaan -->
                        <div class="mb-3">
                            <label for="nama_perpustakaan" class="form-label">Nama Perpustakaan</label>
                            <input type="text" name="nama_perpustakaan" class="form-control" value="{{ old('nama_perpustakaan') }}" required>
                        </div>

                        <!-- Provinsi -->
                        <div class="mb-3">
                            <label for="id_prov" class="form-label">Provinsi</label>
                            <select name="id_prov" class="form-select" required>
                                <option value="" selected>Pilih Provinsi</option>
                                @foreach($provinces as $prov)
                                    <option value="{{ $prov->id }}">{{ $prov->nama_provinsi }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Kabupaten/Kota -->
                        <div class="mb-3">
                            <label for="id_kab_kota" class="form-label">Kabupaten/Kota</label>
                            <select name="id_kab_kota" class="form-select" required>
                                <option value="" selected>Pilih Kabupaten/Kota</option>
                                {{-- Populate dynamically based on provinsi selection --}}
                            </select>
                        </div>

                        <!-- Kecamatan -->
                        <div class="mb-3">
                            <label for="id_kecamatan" class="form-label">Kecamatan</label>
                            <select name="id_kecamatan" class="form-select" required>
                                <option value="" selected>Pilih Kecamatan</option>
                                {{-- Populate dynamically based on kabupaten/kota selection --}}
                            </select>
                        </div>

                        <!-- Kelurahan/Desa -->
                        <div class="mb-3">
                            <label for="id_kelurahan" class="form-label">Kelurahan/Desa</label>
                            <select name="id_kelurahan" class="form-select" required>
                                <option value="" selected>Pilih Kelurahan/Desa</option>
                                {{-- Populate dynamically based on kecamatan selection --}}
                            </select>
                        </div>

                        <!-- Alamat -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
                        </div>

                        <!-- RT -->
                        <div class="mb-3">
                            <label for="rt" class="form-label">RT</label>
                            <input type="text" name="rt" class="form-control" value="{{ old('rt') }}" required>
                        </div>

                        <!-- RW -->
                        <div class="mb-3">
                            <label for="rw" class="form-label">RW</label>
                            <input type="text" name="rw" class="form-control" value="{{ old('rw') }}" required>
                        </div>

                        <!-- Email Lembaga -->
                        <div class="mb-3">
                            <label for="email_lembaga" class="form-label">Email Lembaga</label>
                            <input type="email" name="email_lembaga" class="form-control" value="{{ old('email_lembaga') }}">
                        </div>

                        <!-- Email Perpustakaan -->
                        <div class="mb-3">
                            <label for="email_perpus" class="form-label">Email Perpustakaan</label>
                            <input type="email" name="email_perpus" class="form-control" value="{{ old('email_perpus') }}">
                        </div>

                        <!-- Tombol Simpan -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('lembaga.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
