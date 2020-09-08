@extends('layouts.app')

@section('content')


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Penugasan</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <span class="pr-3">
                    <a href="penugasan/add" type="button" class="btn btn-success">
                    <img src="/img/plus.png" alt="" style="width:20px;"> Tambah Penugasan
                    </a>
                </span>
                <span>
                    <button type="button" class="btn btn-primary">
                    Export/Cetak
                    </button>
                </span>
            </div>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Penugasan</th>
            <th scope="col">Pegawai yang Ditugaskan</th>
            <th scope="col">Pegawai yang Mengupload</th>
            <th scope="col">Tanggal & Waktu Deadline</th>
            <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>        
            @foreach(auth()->user()->penugasans as $penugasan)     
                <tr>
                    <th scope="row">{{$penugasan->id}}</th>
                    <td>{{$penugasan->penugasan}}</td>
                    <td>
                        {{$penugasan->pegawai}}
                        <!-- <ul style="padding-left: 10px;">
                            <li>Nurhasanah</li>  
                            <li>Nita Wulandari</li>  
                            <li>Fajar Tri Prasetio</li>    
                        </ul> -->
                    </td>
                    <td>-</td>
                    <td>{{$penugasan->deadline}}
                    </td>
                    <td>
                        <a href="/penugasan/upload/{{$penugasan->id}}" class="btn btn-primary btn-block">Upload</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
  </div>
</div>
@endsection
