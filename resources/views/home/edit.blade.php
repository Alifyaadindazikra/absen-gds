@extends('home.layout')
  
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home') }}"> Kembali </a>
        </div>
    </div>
</div>
     
     
<form method="POST" action="/ubah/{{$data->id}}"> 
    @csrf

    @method('PATCH')
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nis:</strong>
                <input type="text" name="nis" class="form-control" placeholder="NIS" value="{{$data->nis}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$data->nama}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rombel:</strong>
                <input type="text" name="rombel" class="form-control" placeholder="Rombel" value="{{$data->rombel}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Divisi:</strong>
                <input type="radio" name="divisi" value="MPR" {{$data->divisi == 'MPR'? 'checked' : ''}}> MPR
                <input type="radio" name="divisi" value="Dewan Harian" {{$data->divisi == 'Dewan Harian'? 'checked' : ''}}> Dewan Harian
                <input type="radio" name="divisi" value="Divisi 1" {{$data->divisi == 'Divisi 1'? 'checked' : ''}}> Divisi 1
                <input type="radio" name="divisi" value="Divisi 2" {{$data->divisi == 'Divisi 2'? 'checked' : ''}}> Divisi 2
                <input type="radio" name="divisi" value="Divisi 3" {{$data->divisi == 'Divisi 3'? 'checked' : ''}}> Divisi 3
                <input type="radio" name="divisi" value="Divisi 4" {{$data->divisi == 'Divisi 4'? 'checked' : ''}}> Divisi 4
                <input type="radio" name="divisi" value="Divisi 5" {{$data->divisi == 'Divisi 5'? 'checked' : ''}}> Divisi 5
                <input type="radio" name="divisi" value="Divisi 6" {{$data->divisi == 'Divisi 6'? 'checked' : ''}}> Divisi 6
                <input type="radio" name="divisi" value="Divisi 7" {{$data->divisi == 'Divisi 7'? 'checked' : ''}}> Divisi 7
                <input type="radio" name="divisi" value="Sakit 8" {{$data->divisi == 'Divisi 8'? 'checked' : ''}}> Divisi 8
                <input type="radio" name="divisi" value="Divisi 9" {{$data->divisi == 'Divisi 9'? 'checked' : ''}}> Divisi 9
                <input type="radio" name="divisi" value="Divisi 10" {{$data->divisi == 'Divisi 10'? 'checked' : ''}}> Divisi 10
                
            </div>
        </div>
        <div class="col-xs-12 col-sm- 12 col-md-12">              
            <div class="form-group" >
                <label>Kedatangan</label>
                <input class="form-control" type="time" name="jam" placeholder="hh:mm:ss" value="{{$data->jam}}" />
            </div>
        </div>
    </div>
    


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input type="radio" name="ket" value="Tepat Waktu" {{$data->ket == 'Tepat Waktu'? 'checked' : ''}}> Tepat Waktu
                <input type="radio" name="ket" value="Terlambat" {{$data->ket == 'Terlambat'? 'checked' : ''}}> Terlambat
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </div>
     
</form>
@endsection