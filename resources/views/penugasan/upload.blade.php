@extends('layouts.app')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Penugasan</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form action="/penugasanevidence/{{$penugasan->id}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                    Penugasan
                                    </div>
                                    <div class="col-md-9">
                                    {{$penugasan->penugasan}}</div>
                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-md-3">
                                    Pegawai yang ditugaskan
                                    </div>
                                    <div class="col-md-9">
                                    {{$penugasan->pegawai}}
                                    <!-- <ul style="padding-left: 17px;">
                                        <li>Nurhasanah</li>  
                                        <li>Nita Wulansari</li>  
                                        <li>Tursina</li>    
                                    </ul> -->
                                    </div>
                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-md-3">
                                    Tanggal & Waktu Deadline
                                    </div>
                                    <div class="col-md-9">
                                    {{date("d M Y h:i:s a", strtotime($penugasan->deadline))}}
                                    </div>
                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-md-3">
                                    Keterangan
                                    </div>
                                    <div class="col-md-8">
                                        <textarea id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" required autocomplete="keterangan" autofocus></textarea>
                                        @error('keterangan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                </br>
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <div class="form-group files">
                                            <label for="file" class="col-md-4 col-form-label">File</label>
                                            <!-- <input type="file" class="form-control" multiple="" style="width:100%; height: 230px;"> -->
                                            <input type="file" name="file" id="file" class="form-control" style="width:100%; height: 230px;">
                                            @error('file')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </div>  
                                    </div>
                                </div>
                                <hr>
                                <!-- <a href="#" class="btn border float-left">Batal</a> -->
                                <button class="btn btn-primary">Add file</button>
                                
                            
                            </form> 
                        </div>
                        <div class="card-footer">
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  </div>
</div>
@endsection
