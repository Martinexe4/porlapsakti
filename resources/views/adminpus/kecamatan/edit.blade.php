<<<<<<< HEAD
=======
<!-- File: resources/views/adminpus/kecamatan/edit.blade.php -->
>>>>>>> origin/master
@extends('adminpus.index')

@section('content')
<div class="pagetitle">
    <h1>Edit Kecamatan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('kecamatan.index') }}">Kecamatan</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Edit Kecamatan</h5>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

<<<<<<< HEAD
                    <form action="{{ route('kecamatan.update', $kecamatan->kode_kec) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="kode_kec" class="form-label">Kode Kecamatan</label>
                            <input type="text" class="form-control" value="{{ $kecamatan->kode_kec }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="kode_prov" class="form-label">Provinsi</label>
                            <select id="kode_prov" name="kode_prov" 
                                    class="form-select @error('kode_prov') is-invalid @enderror" required>
                                <option value="">Pilih Provinsi</option>
                                @foreach($provinces as $provinsi)
                                    <option value="{{ $provinsi->kode_prov }}" 
                                            {{ (old('kode_prov', $kecamatan->kode_prov) == $provinsi->kode_prov) ? 'selected' : '' }}>
=======
                    <form action="{{ route('kecamatan.update', $kecamatan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id" class="form-label">ID Kecamatan</label>
                            <input type="number" class="form-control" value="{{ $kecamatan->id }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="id_prov" class="form-label">Provinsi</label>
                            <select id="id_prov" name="id_prov" class="form-select @error('id_prov') is-invalid @enderror" required>
                                <option value="">Pilih Provinsi</option>
                                @foreach($provinces as $provinsi)
                                    <option value="{{ $provinsi->id }}" 
                                            {{ (old('id_prov', $kecamatan->kabKota->id_prov) == $provinsi->id) ? 'selected' : '' }}>
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
                            <select id="kode_kab_kota" name="kode_kab_kota" 
                                    class="form-select @error('kode_kab_kota') is-invalid @enderror" required>
                                <option value="">Pilih Kabupaten/Kota</option>
                                @foreach($kabKotas as $kabKota)
                                    <option value="{{ $kabKota->kode_kab_kota }}" 
                                            {{ (old('kode_kab_kota', $kecamatan->kode_kab_kota) == $kabKota->kode_kab_kota) ? 'selected' : '' }}>
=======
                            <label for="id_kab_kota" class="form-label">Kabupaten/Kota</label>
                            <select id="id_kab_kota" name="id_kab_kota" class="form-select @error('id_kab_kota') is-invalid @enderror" required>
                                <option value="">Pilih Kabupaten/Kota</option>
                                @foreach($kabKotas as $kabKota)
                                    <option value="{{ $kabKota->id }}" 
                                            {{ (old('id_kab_kota', $kecamatan->id_kab_kota) == $kabKota->id) ? 'selected' : '' }}>
>>>>>>> origin/master
                                        {{ $kabKota->nama_kab_kota }}
                                    </option>
                                @endforeach
                            </select>
<<<<<<< HEAD
                            @error('kode_kab_kota')
=======
                            @error('id_kab_kota')
>>>>>>> origin/master
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_kecamatan" class="form-label">Nama Kecamatan</label>
                            <input type="text" name="nama_kecamatan" 
                                   class="form-control @error('nama_kecamatan') is-invalid @enderror" 
                                   value="{{ old('nama_kecamatan', $kecamatan->nama_kecamatan) }}" required>
                            @error('nama_kecamatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-end">
                            <a href="{{ route('kecamatan.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<<<<<<< HEAD
<script>
    $(document).ready(function() {
        $('#kode_prov').change(function() {
            var provinsiId = $(this).val();
            if (provinsiId) {
                // Tampilkan loading (opsional)
                $('#kode_kab_kota').prop('disabled', true).empty().append(
                    '<option value="">Memuat...</option>');

                // Ambil data kabupaten/kota berdasarkan provinsi
                $.ajax({
                    url: '/get-kabupaten-kota/' + provinsiId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#kode_kab_kota').prop('disabled', false).empty().append(
                            '<option value="">Pilih Kabupaten/Kota</option>');
                        $.each(data, function(key, value) {
                            $('#kode_kab_kota').append('<option value="' + value.kode_kab_kota +
                                '">' + value.nama_kab_kota + '</option>');
                        });
                    },
                    error: function() {
                        $('#kode_kab_kota').prop('disabled', true).empty().append(
                            '<option value="">Gagal memuat data</option>');
                    }
                });
            } else {
                // Kosongkan dropdown jika provinsi tidak dipilih
                $('#kode_kab_kota').prop('disabled', true).empty().append(
                    '<option value="">Pilih Kabupaten/Kota</option>');
            }
        });
    });
=======

<script>
    $(document).ready(function() {
            $('#id_prov').change(function() {
                var provinsiId = $(this).val();
                if (provinsiId) {
                    // Tampilkan loading (opsional)
                    $('#id_kab_kota').prop('disabled', true).empty().append(
                        '<option value="">Memuat...</option>');

                    // Ambil data kabupaten/kota berdasarkan provinsi
                    $.ajax({
                        url: '/get-kabupaten-kota/' + provinsiId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#id_kab_kota').prop('disabled', false).empty().append(
                                '<option value="">Pilih Kabupaten/Kota</option>');
                            $.each(data, function(key, value) {
                                $('#id_kab_kota').append('<option value="' + value.id +
                                    '">' + value.nama_kab_kota + '</option>');
                            });
                        },
                        error: function() {
                            $('#id_kab_kota').prop('disabled', true).empty().append(
                                '<option value="">Gagal memuat data</option>');
                        }
                    });
                } else {
                    // Kosongkan dropdown jika provinsi tidak dipilih
                    $('#id_kab_kota').prop('disabled', true).empty().append(
                        '<option value="">Pilih Kabupaten/Kota</option>');
                }
            });
        });
>>>>>>> origin/master
</script>
@endsection