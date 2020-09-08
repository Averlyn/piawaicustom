@extends('layouts.app')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dialog Kinerja</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                
                            <div class="row">
                                <div class="col-md-4">
                                Nama KTJ
                                </div>
                                <div class="col-md-8">
                                Melakukan perhitungan formasi seluruh jabatan fungsional dengan mempertimbangkan ABK formasi pelaksana
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-md-4">
                                Tanggal
                                </div>
                                <div class="col-md-8">
                                18 Juni 2020, 10.00
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-md-4">
                                Kendala/Hambatan
                                </div>
                                <div class="col-md-8">
                                <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            
                            <hr>
                            <a href="/targetkinerja" class="btn btn-success">Kirim Ke Atasan</a>
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
