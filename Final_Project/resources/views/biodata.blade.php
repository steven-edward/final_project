@extends('layouts.master')

@section('title')
    Biodata
@endsection

@section('content_header')
    Biodata
@endsection



@section('content_body')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Biodata</h3>
    </div>
    <!-- /.card-header -->
    <!-- Tablist start -->
    <form rule="form">
        <div class="card-body">
            <div class="form-group">
                <label for="namaLengkap">Nama Lengkap :</label>
                <input type="text" name="nama_lengkap" class="form-control form-control-line">
            </div>
            <div class="form-group clearfix">
                <label for="email">Email :</label>
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control-line" name="gantiEmail">
                    <span class="input-group-append">
                        <button type="button" class="btn btn-info btn-flat" id="gantiEmail">
                            Ganti Email
                        </button>
                    </span>
                </div>
                {{-- <div class="col-md-12">
                    depan_belakang@mail.com
                    <button type="button" class="btn btn-secondary btn-sm pull-right" id="ganti_email_button" data-toggle="modal" data-target="#modal_ganti_email">Ganti email</button>
                </div> --}}
            </div>
            <div class="form-group">
                <label for="password">Password (Isi hanya jika Anda ingin mengganti password) :</label>
                <input type="password" name="gantiPassword" class="form-control form-control-line">
            </div>
            <div class="form-group">
                <label for="nomorHp">Nomor HP :</label>
                <input type="text" name="nomorHp" class="form-control form-control-line"> 
            </div>
            <div class="form-group">
                <label for="kota">Kota domisili saat ini :</label>
                <input type="text" name="kotaDomisili" class="form-control form-control-line"> 
            </div>
            <div class="form-group">
                <label for="tglLahir">Tanggal Lahir :</label>
                <input type="date" name="tglLahir" class="form-control form-control-line"> 
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan Terakhir</label>
                <select class="form-control form-control-line" name="pendidikan_terakhir">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="institusi_pendidikan">Nama Institusi Pendidikan Terakhir</label>
                    <input type="text" name="institusi_pendidikan" class="form-control form-control-line"> 
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control form-control-line" name="gender">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success" id="btn-data-diri">
                    Update
                </button>
            </div>
        </div>
    </form>
</div>
@endsection