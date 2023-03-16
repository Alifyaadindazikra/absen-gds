@extends('home.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kehadiran GDS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/tambah-data"> Absen Dulu!!!</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered bg-">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Divisi</th>
            <th>Jam Kedatangan</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        <?php $i = 1 ?>
        @foreach ($presence as $p)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $p->nis }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->rombel}}</td>
            <td>{{ $p->divisi }}</td>
           <td>{{ $p->jam }}</td>
            <td>{{ $p->ket}}</td>
            <td>
                <form action="/hapus/{{$p->id}}" method="POST">
           
                    <a class="btn btn-primary" href="/edit/{{$p->id}}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

   
        
@endsection