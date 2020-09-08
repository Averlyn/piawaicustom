@extends('layouts.app')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">IKU</label>

                                    <div class="col-md-6">
                                        <select name="iku" class="form-control @error('iku') is-invalid @enderror">
                                            <option value="">Pilih IKU</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Tupoksi Atasan</label>

                                    <div class="col-md-6">
                                        <select name="iku" class="form-control @error('iku') is-invalid @enderror">
                                            <option value="">Pilih Tupoksi Atasan</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Tupoksi Jabatan</label>

                                    <div class="col-md-6">
                                        <select name="iku" class="form-control @error('iku') is-invalid @enderror">
                                            <option value="">Pilih Tupoksi Jabatan</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Sasaran Kerja Pegawai</label>

                                    <div class="col-md-6">
                                        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus></textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Jenis Output</label>

                                    <div class="col-md-6">
                                        <select name="jenisOutput" class="form-control @error('iku') is-invalid @enderror">
                                            <option value="">Pilih Output</option>
                                            <option value="Kuantitatif">Kuantitatif</option>
                                            <option value="Kualitatif">Kualitatif</option>
                                        </select>
                                    </div>
                                </div>

                                
                                
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Output</label>

                                    <div class="col-md-3">
                                        <input id="name" type="text" placeholder = "Masukkan Jumlah" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="iku" class="form-control @error('iku') is-invalid @enderror">
                                            <option value=""></option>
                                            <option value="M">Kuantitatif</option>
                                            <option value="F">Kualitatif</option>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Waktu</label>
                                        <div class="col-md-2">
                                            <select name="iku" class="form-control @error('iku') is-invalid @enderror disabled">
                                                <option value="">0</option>
                                                <option value="M">1</option>
                                                <option value="F">2</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="iku" class="form-control @error('iku') is-invalid @enderror">
                                                <option value="">Bulan</option>
                                                <option value="M">Januari</option>
                                                <option value="F">Februari</option>
                                            </select>
                                        </div>
                                    </div>
                                
                                    

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Kategori</label>

                                    <div class="col-md-6">
                                        <input type="radio" name="kategori" value="unsurU">
                                        <label for="male">Unsur Utama</label> &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="kategori" value="unsurP">
                                        <label for="female">Unsur Penjunjang</label>
                                    </div>
                                </div>
                                
                                <div class="col-10 offset-1">
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
