@extends('layouts.layout_form')

@section('title')
    inputRuangan
@endsection

@section('content')
<div style="margin: 100px auto; width: 40%">
	<center><h3>Form Input Barang</h3></center>
	<form method="POST" action="/simpanRuangan">
	{{csrf_field()}}

		<div class="form-group">
	 		<label>Kode Ruangan</label>
	 		<input type="text" name="kode_ruangan" class="form-control" />
		</div>

		<div class="form-group">
			<label>Nama Ruangan</label>
			<input type="text" name="nama_ruangan" class="form-control" />
		</div>	

		<div class="form-group">
			<label>Jumlah</label>
			<input type="text" name="jumlah" class="form-control" />
		</div>	

		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control" />
		</div>	
		 		

		 <div class="">
      		<button type="submit" class="btn btn-info">Simpan</button>
      		<a href="/table ruangan" class="btn btn-danger">Batal</a>
    	</div>
	</form>
</div>
@endsection