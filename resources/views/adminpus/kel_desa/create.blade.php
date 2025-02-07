@extends('adminpus.index')

@section('content')
<div class="pagetitle">
    <h1>Tambah Kelurahan/Desa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('kel_desa.index') }}">Kelurahan/Desa</a></li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Tambah Kelurahan/Desa</h5>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('kel_desa.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
<<<<<<< HEAD
                            <label for="kode_kel_desa" class="form-label">Kode Kelurahan/Desa</label>
                            <input type="text" name="kode_kel_desa" class="form-control @error('kode_kel_desa') is-invalid @enderror"
                                   value="{{ old('kode_kel_desa') }}" required>
                            @error('kode_kel_desa')
=======
                            <label for="id" class="form-label">ID Kelurahan/Desa</label>
                            <input type="number" name="id" class="form-control @error('id') is-invalid @enderror"
                                   value="{{ old('id') }}" required>
                            @error('id')
>>>>>>> origin/master
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
<<<<<<< HEAD
                            <label for="kode_prov" class="form-label">Provinsi</label>
                            <select id="kode_prov" name="kode_prov" class="form-select @error('kode_prov') is-invalid @enderror" required>
                                <option value="">Pilih Provinsi</option>
                                @foreach ($provinces as $provinsi)
                                    <option value="{{ $provinsi->kode_prov }}" {{ old('kode_prov') == $provinsi->kode_prov ? 'selected' : '' }}>
=======
                            <label for="id_prov" class="form-label">Provinsi</label>
                            <select id="id_prov" name="id_prov" class="form-select @error('id_prov') is-invalid @enderror" required>
                                <option value="">Pilih Provinsi</option>
                                @foreach ($provinces as $provinsi)
                                    <option value="{{ $provinsi->id }}" {{ old('id_prov') == $provinsi->id ? 'selected' : '' }}>
>>>>>>> origin/master
                                        {{ $provinsi->nama_provinsi }}
                                    </option>
                                @endforeach
                            </select>
<<<<<<< HEAD
                            @error('kode_prov')
=======
                            @error('id_prov')
>>>>>>> origin/master
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
<<<<<<< HEAD
                            <label for="kode_kab_kota" class="form-label">Kabupaten/Kota</label>
                            <select id="kode_kab_kota" name="kode_kab_kota" class="form-select" disabled required>
=======
                            <label for="id_kab_kota" class="form-label">Kabupaten/Kota</label>
                            <select id="id_kab_kota" name="id_kab_kota" class="form-select" disabled required>
>>>>>>> origin/master
                                <option value="">Pilih Kabupaten/Kota</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
<<<<<<< HEAD
                            <label for="kode_kec" class="form-label">Kecamatan</label>
                            <select id="kode_kec" name="kode_kec" class="form-select" disabled required>
=======
                            <label for="id_kecamatan" class="form-label">Kecamatan</label>
                            <select id="id_kecamatan" name="id_kecamatan" class="form-select" disabled required>
>>>>>>> origin/master
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </div>
                                          
                        <div class="mb-3">
                            <label for="nama_kel_desa" class="form-label">Nama Kelurahan/Desa</label>
                            <input type="text" name="nama_kel_desa"
                                   class="form-control @error('nama_kel_desa') is-invalid @enderror"
                                   value="{{ old('nama_kel_desa') }}" required>
                            @error('nama_kel_desa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-end">
                            <a href="{{ route('kel_desa.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<<<<<<< HEAD

<script>
    $(document).ready(function () {
        // Saat Provinsi berubah
        $('#kode_prov').change(function () {
            const provinsiId = $(this).val();
            if (provinsiId) {
                $('#kode_kab_kota').prop('disabled', true).empty().append('<option value="">Memuat...</option>');
                $('#kode_kec').prop('disabled', true).empty().append('<option value="">Pilih Kecamatan</option>');
=======
<script>
    $(document).ready(function () {
        // Saat Provinsi berubah
        $('#id_prov').change(function () {
            const provinsiId = $(this).val();
            if (provinsiId) {
                $('#id_kab_kota').prop('disabled', true).empty().append('<option value="">Memuat...</option>');
                $('#id_kecamatan').prop('disabled', true).empty().append('<option value="">Pilih Kecamatan</option>');
>>>>>>> origin/master
                
                $.ajax({
                    url: '/get-kabupaten-kota/' + provinsiId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
<<<<<<< HEAD
                        $('#kode_kab_kota').prop('disabled', false).empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                        $.each(data, function (key, value) {
                            $('#kode_kab_kota').append('<option value="' + value.kode_kab_kota + '">' + value.nama_kab_kota + '</option>');
                        });
                    },
                    error: function () {
                        $('#kode_kab_kota').prop('disabled', true).empty().append('<option value="">Gagal memuat data</option>');
                    }
                });
            } else {
                $('#kode_kab_kota').prop('disabled', true).empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                $('#kode_kec').prop('disabled', true).empty().append('<option value="">Pilih Kecamatan</option>');
=======
                        $('#id_kab_kota').prop('disabled', false).empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                        $.each(data, function (key, value) {
                            $('#id_kab_kota').append('<option value="' + value.id + '">' + value.nama_kab_kota + '</option>');
                        });
                    },
                    error: function () {
                        $('#id_kab_kota').prop('disabled', true).empty().append('<option value="">Gagal memuat data</option>');
                    }
                });
            } else {
                $('#id_kab_kota').prop('disabled', true).empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                $('#id_kecamatan').prop('disabled', true).empty().append('<option value="">Pilih Kecamatan</option>');
>>>>>>> origin/master
            }
        });

        // Saat Kabupaten/Kota berubah
<<<<<<< HEAD
        $('#kode_kab_kota').change(function () {
            const kabupatenId = $(this).val();
            if (kabupatenId) {
                $('#kode_kec').prop('disabled', true).empty().append('<option value="">Memuat...</option>');
=======
        $('#id_kab_kota').change(function () {
            const kabupatenId = $(this).val();
            if (kabupatenId) {
                $('#id_kecamatan').prop('disabled', true).empty().append('<option value="">Memuat...</option>');
>>>>>>> origin/master

                $.ajax({
                    url: '/get-kecamatan/' + kabupatenId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
<<<<<<< HEAD
                        $('#kode_kec').prop('disabled', false).empty().append('<option value="">Pilih Kecamatan</option>');
                        $.each(data, function (key, value) {
                            $('#kode_kec').append('<option value="' + value.kode_kec + '">' + value.nama_kecamatan + '</option>');
                        });
                    },
                    error: function () {
                        $('#kode_kec').prop('disabled', true).empty().append('<option value="">Gagal memuat data</option>');
                    }
                });
            } else {
                $('#kode_kec').prop('disabled', true).empty().append('<option value="">Pilih Kecamatan</option>');
=======
                        $('#id_kecamatan').prop('disabled', false).empty().append('<option value="">Pilih Kecamatan</option>');
                        $.each(data, function (key, value) {
                            $('#id_kecamatan').append('<option value="' + value.id + '">' + value.nama_kecamatan + '</option>');
                        });
                    },
                    error: function () {
                        $('#id_kecamatan').prop('disabled', true).empty().append('<option value="">Gagal memuat data</option>');
                    }
                });
            } else {
                $('#id_kecamatan').prop('disabled', true).empty().append('<option value="">Pilih Kecamatan</option>');
>>>>>>> origin/master
            }
        });
    });
</script>
@endsection