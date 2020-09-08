@extends('layouts.app')

@section('content')


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom">
            <div>
                <img src="/storage/profile/guest.png" alt="" class="rounded-circle mr-3" style="max-width:50px; float:left;">
                Andie Noegroho<br>Kepala Bagian Perencanaan, Informasi dan Kinerja Sumber Daya Manusia
            </div>
            
        </div>

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
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}
                    </td>
                    <td>
                    @if($user->level === 3)
                        Admin
                    @elseif($user->level === 2)
                        Atasan
                    @else
                        Bawahan
                    @endif
                    </td>
                    <td class="d-flex" style="border-style:none;">
                        <span class="pr-1">
                            <a href ="/edit/{{$user->id}}" class="btn btn-success">
                            Edit
                            </a>
                        </span>
                        <span>
                            <a href ="#" class="btn btn-danger">
                            Delete
                            </a>
                        </span>
                    </td>
                </tr>   
                @endforeach                          
            </tbody>
        </table>
    </main>
  </div>
</div>
@endsection
