@extends('home.layout')
     
@section('content')

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Absen GDS Dulu!!!</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home') }}"> Kembali</a>
        </div>
    </div>
</div>

<form action="{{route('kirim_data')}}" method="POST">
    @csrf
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nis:</strong>
                <input type="text" name="nis" class="form-control" placeholder="NIS" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rombel:</strong>
                <input type="text" name="rombel" class="form-control" placeholder="Rombel" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Divisi:</strong>
                <input type="radio" name="divisi" value="MPR"> MPR
                <input type="radio" name="divisi" value="Dewan Harian" > Dewan Harian
                <input type="radio" name="divisi" value="Divisi 1" > Divisi 1
                <input type="radio" name="divisi" value="Divisi 2"> Divisi 2
                <input type="radio" name="divisi" value="Divisi 3"> Divisi 3
                <input type="radio" name="divisi" value="Divisi 4"> Divisi 4
                <input type="radio" name="divisi" value="Divisi 5"> Divisi 5
                <input type="radio" name="divisi" value="Divisi 6"> Divisi 6
                <input type="radio" name="divisi" value="Divisi 7"> Divisi 7
                <input type="radio" name="divisi" value="Sakit 8"> Divisi 8
                <input type="radio" name="divisi" value="Divisi 9"> Divisi 9
                <input type="radio" name="divisi" value="Divisi 10"> Divisi 10
            </div>
        </div>
            <div class="col-xs-12 col-sm- 12 col-md-12">              
                <div class="form-group" >
                    <label>Kedatangan</label>
                    <input class="form-control" type="time"  name="jam" placeholder="hh:mm:ss" />
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input type="radio" name="ket" value="Tepat Waktu" > Tepat Waktu
                <input type="radio" name="ket" value="Terlambat" > Terlambat
               
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </div>
    </form>

@endsection
