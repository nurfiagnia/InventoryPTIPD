@extends('layouts.layout')

@section('title')
    editRuangan
@endsection

@section('content')

	<h3>Form Edit Ruangan</h3>
	<form method="POST" action="/{{$data->id}}/updateRuangan">
	{{csrf_field()}}
      
		 <table>

		 	<tr>
		 		<td>Kode Ruangan</td>
		 		<td><input type="text" name="kode_ruangan" value="{{$data->kode_ruangan}}" /></td>

		 	</tr>

		 	<tr>
		 		
		 		<td>Nama Ruangan</td>
		 		<td><input type="text" name="nama_ruangan" value="{{$data->nama_ruangan}}"/></td>

		 	</tr>

		 	<tr>

		 		<td>Jumlah</td>
		 		<td><input type="text" name="jumlah" value="{{$data->jumlah}}"/></td>

		 	</tr>

		 	<tr>

		 		<td>Keterangan</td>
		 		<td><input type="text" name="keterangan" value="{{$data->keterangan}}" ></td>

		 	</tr>

		 	<tr>
		 		<td></td>
		 		<td><input name="submit" type="submit" value="save"/></td>

		 	</tr>
		 		 	
		 </table>
	
	</form>
@endsection