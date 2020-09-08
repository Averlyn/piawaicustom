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

                
                            <div class="row">
                                <div class="col-md-3">
                                Penugasan
                                </div>
                                <div class="col-md-9">
                                Melakukan perhitungan formasi seluruh jabatan fungsional dengan mempertimbangkan ABK formasi pelaksana
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-md-3">
                                Pegawai yang ditugaskan
                                </div>
                                <div class="col-md-9">
                                <ul style="padding-left: 17px;">
                                    <li>Nurhasanah</li>  
                                    <li>Nita Wulansari</li>  
                                    <li>Tursina</li>    
                                </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                Tanggal & Waktu Deadline
                                </div>
                                <div class="col-md-9">
                                30 Juni 2020 Pukul 15.00 WIB
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                Keterangan
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            </br>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <form method="post" action="#" id="#">          
                                        <div class="form-group files">
                                            <label>Upload Your File </label>
                                            <input type="file" class="form-control" multiple="" style="width:100%; height: 230px;">
                                        </div>  
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <a href="#" class="btn border float-left">Batal</a>
                            <a href="#" class="btn border border-muted btn-success float-right">Kirim</a>
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
