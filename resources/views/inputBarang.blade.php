@extends('layouts.layout_form')

@section('title')
    inputBarang
@endsection

@section('content')
<div style="margin: 100px auto; width: 40%">
	<center><h3>Form Input Barang</h3></center>
	<form method="POST" action="/simpanBarang">
	{{csrf_field()}}

		<div class="form-group">
	 		<label>Kode Barang</label>
	 		<input type="text" name="kode_barang" class="form-control" />
		</div>

		<div class="form-group">
			<label>Nama Barang</label>
			<input type="text" name="nama_barang" class="form-control" />
		</div>	

		<div class="form-group">
			<label>Stok</label>
			<input type="text" name="stok" class="form-control" />
		</div>	

		<div class="form-group">
			<label>Jumlah</label>
			<input type="text" name="jumlah" class="form-control" />
		</div>	
		 		

		 <div class="">
      		<button type="submit" class="btn btn-info">Simpan</button>
      		<a href="/table barang" class="btn btn-danger">Batal</a>
    	</div>
	</form>
</div>
@endsection