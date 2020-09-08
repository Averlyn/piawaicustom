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
            <th scope="col">Nama SKP</th>
            <th scope="col">Output</th>
            <th scope="col">Biaya</th>
            <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach($skps as $skp)
                    @if($skp->confirmed === NULL)
                        <tr>
                            <th scope="row">{{$skp->id}}</th>
                            <td>{{$skp->skj}}</td>
                            <td>{{$skp->output}}</td>
                            <td>{{$skp->waktu}}</td>
                            <td class="d-flex" style="border-style:none;">
                                <span class="pr-1">
                                    <form action="/targetkinerjasup/{{$skp->id}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input id="confirmed" type="hidden"  value=1 name="confirmed">
                                        <button class="btn btn-success">Terima</button>
                                    </form>
                                    <!-- <button type="button" class="btn btn-success">
                                    Terima
                                    </button> -->
                                </span>
                                <span>
                                    <form action="/targetkinerjasup/{{$skp->id}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input id="confirmed" type="hidden"  value=0 name="confirmed">
                                        <button class="btn btn-danger">Tolak</button>
                                    </form>
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
