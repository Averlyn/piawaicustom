@extends('layouts.app')

@section('content')
        <Create user_id="{{auth()->user()->id}}"></Create>
        
        <!-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Tambah Sasaran Kerja Pegawai</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form action="/targetkinerja" enctype="multipart/form-data" method="POST">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="iku" class="col-md-4 col-form-label text-md-right">IKU</label>

                                        <div class="col-md-6">
                                            <input id="iku" type="text" class="form-control @error('iku') is-invalid @enderror" name="iku" value="{{ old('name') }}" required autocomplete="iku" autofocus>

                                            @error('iku')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="ta" class="col-md-4 col-form-label text-md-right">Tupoksi Atasan</label>

                                        <div class="col-md-6">
                                            <input id="ta" type="text" class="form-control @error('ta') is-invalid @enderror" name="ta" value="{{ old('name') }}" required autocomplete="ta" autofocus>

                                            @error('ta')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="tj" class="col-md-4 col-form-label text-md-right">Tupoksi Jabatan</label>

                                        <div class="col-md-6">
                                            <input id="tj" type="text" class="form-control @error('tj') is-invalid @enderror" name="tj" value="{{ old('name') }}" required autocomplete="tj" autofocus>

                                            @error('tj')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="skj" class="col-md-4 col-form-label text-md-right">Sasaran Kerja Pegawai</label>

                                        <div class="col-md-6">
                                            <input id="skj" type="text" class="form-control @error('skj') is-invalid @enderror" name="skj" value="{{ old('name') }}" required autocomplete="skj" autofocus>

                                            @error('skj')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jo" class="col-md-4 col-form-label text-md-right">Jenis Output</label>

                                        <div class="col-md-6">
                                            <input id="jo" type="text" class="form-control @error('jo') is-invalid @enderror" name="jo" value="{{ old('name') }}" required autocomplete="jo" autofocus>

                                            @error('jo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="output" class="col-md-4 col-form-label text-md-right">Output</label>

                                        <div class="col-md-6">
                                            <input id="output" type="text" class="form-control @error('output') is-invalid @enderror" name="output" value="{{ old('name') }}" required autocomplete="output" autofocus>

                                            @error('output')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="waktu" class="col-md-4 col-form-label text-md-right">Waktu</label>

                                        <div class="col-md-6">
                                            <input id="waktu" type="text" class="form-control @error('waktu') is-invalid @enderror" name="waktu" value="{{ old('name') }}" required autocomplete="waktu" autofocus>

                                            @error('waktu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="kategori" class="col-md-4 col-form-label text-md-right">Kategori</label>

                                        <div class="col-md-6">
                                            <input id="kategori" type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{ old('name') }}" required autocomplete="kategori" autofocus>

                                            @error('kategori')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-10 offset-1">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    </div>
                                    
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main> -->
    </div>
</div>


@endsection
