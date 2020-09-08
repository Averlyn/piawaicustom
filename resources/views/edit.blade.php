@extends('layouts.app')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom">
            <div>
                <img src="/storage/profile/guest.png" alt="" class="rounded-circle mr-3" style="max-width:50px; float:left;">
                Andie Noegroho<br>Kepala Bagian Perencanaan, Informasi dan Kinerja Sumber Daya Manusia
            </div>           
        </div>
        <form action="/edit/{{ $user->id }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Level</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td><input id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $user->name}}" name="name" required autocomplete="title" autofocus disabled>
                                    @error('name')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                            </td>
                            <td><input id="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $user->email}}" name="email" required autocomplete="email" autofocus disabled>
                                    @error('email')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                            </td>
                            <td>
                                <select id="level" name="level" class="form-control">
                                    @if($user->level === 3)
                                        <option value=1>Bawahan</option>
                                        <option value=2>Atasan</option>
                                        <option value=3 selected>Admin</option>
                                    @elseif($user->level === 2)
                                        <option value=1>Bawahan</option>
                                        <option value=2 selected>Atasan</option>
                                        <option value=3>Admin</option>
                                    @else
                                        <option value=1 selected>Bawahan</option>
                                        <option value=2>Atasan</option>
                                        <option value=3>Admin</option>
                                    @endif
                                </select>
                            </td>  
                            <td>
                                <button class="btn btn-primary btn-block">Save Profile</button>
                            </td>
                        </tr>
                    </tbody>
            </table>
        </form>
    </main>
  </div>
</div>
@endsection
