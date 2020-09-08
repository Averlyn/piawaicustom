@extends('layouts.app')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Inisiatif Mandiri</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-2 col-form-label text-md-right">Pekerjaan</label>

                                    <div class="col-md-9">
                                        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus></textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-2 col-form-label text-md-right">Tanggal</label>
                                    <div class="col-md-9">
                                        <input type="date" id="meeting-time" name="meeting-time" value="2020-10-20">
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="name" class="col-md-2 col-form-label text-md-right">Atasan</label>

                                    <div class="col-md-9">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <div class="form-group files">
                                            <label>Upload Your File </label>
                                            <input type="file" class="form-control" multiple="" style="width:100%; height: 230px;">
                                        </div>  
                                    </div>
                                </div>

                            </form>
                            
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
