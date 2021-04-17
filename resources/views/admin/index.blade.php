@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($data as $dt)
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td scope="row">{{$dt->judul}}</td>
                            <td scope="row"><img width="90px" height="90px" src=
                            "{{asset('storage/'.$dt->foto)}}" ></td>
                            <td scope="row">{{$dt->created_at}}</td>
                            <td scope="row">Edit | Lihat | Hapus</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
                {{$data->links()}}
            </div>
        </div>
    </div>
@endsection