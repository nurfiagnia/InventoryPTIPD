@extends('layouts.layout')

@section('title')
    edit
@endsection

@section('content')

	<center><h3>Form Edit</h3></center>
	<div style="margin: 100px auto; width: 40%">
	<form method="POST" action="/{{$data->id}}/updateBarang">
	{{csrf_field()}}

    
		 <div class="form-group">
	 		<label>Kode Barang</label>
	 		<input type="text" name="kode_barang" value="{{$data->kode_barang}}" class="form-control" />
		</div>

		<div class="form-group">
			<label>Nama Barang</label>
			<input type="text" name="nama_barang" value="{{$data->nama_barang}}" class="form-control" />
		</div>	

		<div class="form-group">
			<label>Stok</label>
			<input type="text" name="stok" value="{{$data->stok}}" class="form-control" />
		</div>	

		<div class="form-group">
			<label>Jumlah</label>
			<input type="text" name="jumlah" value="{{$data->jumlah}}" class="form-control" />
		</div>	
		 		

		 <div class="">
      		<button type="submit" class="btn btn-info">Simpan</button>
      		
    	</div>
	</form>
</div>
@endsection