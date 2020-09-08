@extends('layouts.app')

@section('content')


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="background:#D3D3D3;">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Penugasan</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <span class="pr-3">
                    <button type="button" class="btn btn-success">
                    <img src="/img/plus.png" alt="" style="width:20px;"> Tambah Sasaran Kerja Pegawai
                    </button>
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
            <th scope="col">Penugasan</th>
            <th scope="col">Pegawai yang Ditugaskan</th>
            <th scope="col">Pegawai yang Mengupload</th>
            <th scope="col">Tanggal & Waktu Deadline</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>             
                <tr>
                    <th scope="row">2</th>
                    <td>Melakukan perhitungan formasi seluruh jabatan fungsional dengan mempertimbangkan ABK formasi pelaksana</td>
                    <td>
                        <ul style="padding: 0;">
                            <li>Nurhasanah</li>  
                            <li>Nita Wulandari</li>  
                            <li>Fajar Tri Prasetio</li>    
                        </ul>
                    </td>
                    <td>-</td>
                    <td>30 Juni 2020</br>
                        Pukul 15:00 WIB
                    </td>
                    <td>Belum Tuntas</td>
                    <td>
                        <button type="button" class="btn btn-success btn-block">
                        Validasi
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Menyusun Peta Jabatan</td>
                    <td>
                        <ul style="padding: 0;">
                            <li>Nurhasanah</li>  
                            <li>Nita Wulansari</li>  
                            <li>Tursina</li>    
                        </ul>
                    </td>
                    <td>Nita Wulansari</br>
                    Tgl Upload : 3 Juni 2020</br>
                    Pukul: 10.51 WIB</br>
                    Keterangan: WFH
                    </td>
                    <td>30 Juni 2020</br>
                        Pukul 15:00 WIB
                    </td>
                    <td>Sudah Tuntas</td>
                    <td>
                        Checklist
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
  </div>
</div>
@endsection
