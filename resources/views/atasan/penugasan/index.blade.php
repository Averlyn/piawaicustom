@extends('layouts.app')

@section('content')


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom">
            <div>
                <img src="/storage/profile/guest.png" alt="" class="rounded-circle mr-3" style="max-width:50px; float:left;">
                Nita Wulansari<br>Analis Kepegawaian Ahli Muda
            </div>
            
        </div>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
            <th colspan="6" class="bg-warning">! Penugasan</th>
            </tr>
            </thead>
            <tbody>
            @foreach($penugasans as $penugasan)
                @if($penugasan->confirmed === NULL)
                <tr>
                    <th scope="row">{{$penugasan->id}}</th>
                    <td>{{$penugasan->penugasan}}</td>
                    <td>{{$penugasan->pegawai}}
                        <!-- Pegawai yang ditugaskan:</br>
                        <ul style="padding-left: 10px;">
                            <li>Nurhasanah</li>  
                            <li>Nita Wulandari</li>  
                            <li>Fajar Tri Prasetio</li>    
                        </ul> -->
                    </td>
                    <td>{{date("d M Y h:i:s a", strtotime($penugasan->deadline))}}
                    </td>
                    <td>
                    @foreach($penugasan->penugasanevidences as $evidence)
                        Keterangan:</br>
                        {{$evidence->keterangan}}</br></br>
                        Evidence/Output:</br>
                        <a href="/storage/files/{{$penugasan->user_id}}/penugasan/{{$evidence->file}}" download>{{$evidence->file}}</a></br></br>                       
                    @endforeach
                    </td>
                    <td class="d-flex" style="border-style:none;">
                        <span class="pr-1">
                            <button type="button" class="btn btn-success">
                            Setujui
                            </button>
                        </span>
                        <span>
                            <button type="button" class="btn btn-danger">
                            Tidak
                            </button>
                        </span>
                    </td>
                </tr>    
                @endif
            @endforeach          
                
            </tbody>
        </table>
    </main>
  </div>
</div>
@endsection


