@extends('layouts.app')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Penugasan
                        </br> Hari ini, 6 Juni 2020
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="/penugasan" enctype="multipart/form-data" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="penugasan" class="col-md-4 col-form-label text-md-right">Penugasan</label>

                                    <div class="col-md-7">
                                        <textarea id="penugasan" class="form-control @error('penugasan') is-invalid @enderror" name="penugasan" required autocomplete="penugasan" autofocus></textarea>
                                        @error('penugasan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                </div>


                                <auto-complete></auto-complete>
                                <!-- <div class="form-group row">
                                    <label for="pegawai" class="col-md-4 col-form-label text-md-right">Pegawai Yang Ditugaskan</label>

                                    <div class="col-md-7">
                                        <input id="pegawai" type="text" class="form-control @error('pegawai') is-invalid @enderror" pegawai="pegawai" value="{{ old('pegawai') }}" required autocomplete="pegawai" autofocus>
                                        Make sure the form has the autocomplete function switched off:
                                        <form autocomplete="off" action="/action_page.php">
                                        <div class="autocomplete" style="width:500px;">
                                            <input id="myInput" type="text" name="pegawai" class ="form-control">
                                        </div>
                                        <input type="submit" class="btn btn-primary">
                                        </form>
                                        @error('pegawai')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <label for="deadline" class="col-md-4 col-form-label text-md-right">Waktu & Tanggal Deadline</label>
                                    <div class="col-md-7">
                                        <input type="datetime-local" id="deadline" name="deadline" value="2020-10-20T10:20" class="form-control">
                                        
                                    </div>
                                </div>
                                

                                
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                                </div>
                                
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
  </div>
</div>
@endsection
