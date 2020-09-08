@extends('layouts.app')

@section('content')


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Sasaran Kerja Pegawai</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <span class="pr-3">
                    <a href="/targetkinerja/add" class="btn btn-success">
                    <img src="/img/plus.png" alt="" style="width:20px;"> Tambah Sasaran Kerja Pegawai
                    </a>
                </span>
                <span>
                    <button type="button" class="btn btn-primary">
                    Export/Cetak
                    </button>
                </span>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Sasaran Kerja Pegawai</th>
            <th scope="col">Target Output</th>
            <th scope="col">Waktu dan Biaya</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Indeks Sistem Merit</td>
                    <td>Output: 380.5 Indeks</br>
                    Kualitas: 100%
                    </td>
                    <td>Waktu: 12 Bulan</td>
                    <td>Sudah diverifikasi atasan</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-block">
                        Lihat Aktivitas
                        </button>
                        <button type="button" class="btn btn-primary btn-block">
                        Lihat Jenis Aktivitas yang Terhubung
                        </button>
                        <button type="button" class="btn btn-primary btn-block">
                        Dialog Kinerja
                        </button>
                    </td>
                </tr>              
                <tr>
                    <th scope="row">2</th>
                    <td>Indeks Sistem Merit</td>
                    <td>Output: 380.5 Indeks</br>
                    Kualitas: 100%
                    </td>
                    <td>Waktu: 12 Bulan</td>
                    <td>Sudah diverifikasi atasan</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-block">
                        Lihat Aktivitas
                        </button>
                        <button type="button" class="btn btn-primary btn-block">
                        Lihat Jenis Aktivitas yang Terhubung
                        </button>
                        <button type="button" class="btn btn-primary btn-block">
                        Dialog Kinerja
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Melakukan perhitungan formasi seluruh jabatan fungsional dengan mempertimbangkan ABK formasi pelaksana</td>
                    <td>Output: 25 Dokumen</br>
                    Kualitas: 100%
                    </td>
                    <td>Waktu: 12 Bulan</td>
                    <td></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-block">
                        Lihat Aktivitas
                        </button>
                        <button type="button" class="btn btn-primary btn-block">
                        Lihat Jenis Aktivitas yang Terhubung
                        </button>
                        <button type="button" class="btn btn-primary btn-block">
                        Edit
                        </button>
                        <button type="button" class="btn btn-danger btn-block">
                        Delete
                        </button>
                        <button type="button" class="btn btn-primary btn-block">
                        Rencana Capaian
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
  </div>
</div>
@endsection
