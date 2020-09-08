@extends('layouts.app')

@section('content')
    <Index v-bind:skps="{{auth()->user()->skps}}"></Index>
    
    <!-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Sasaran Kerja Pegawai</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <span class="pr-3">
                    <a href="/targetkinerja/add" type="button" class="btn btn-success">
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

        <table class="table table-striped table-bordered">
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
                @foreach(auth()->user()->skps as $skp)
                    <tr>
                        <th scope="row">{{$skp->id}}</th>
                        <td>{{$skp->skj}}</td>
                        <td>{{$skp->output}}</td>
                        <td>{{$skp->kategori}}</td>
                        <td>
                        @if($skp->confirmed === 0)
                            Tidak Disetujui
                        @elseif($skp->confirmed)
                            Disetujui
                        @else
                            Belum Ditindaklanjuti
                        @endif
                        </td>
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
                @endforeach
            </tbody>
        </table>
    </main> -->
  </div>
</div>
@endsection
