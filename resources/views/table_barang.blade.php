@extends('layouts.layout')

@section('title')
    table
@endsection

@section('content')

      <h3>Data Barang</h3>
      
      <div class="container" style="padding-top:30px; padding-bottom: 15px;">

	<a href="/inputBarang" class="btn btn-success">Tambah Data</a>
      </div>

      <table class="table table-hover">
    <thead>
      	<thead>
      		<tr>
      			<th>No</th>
      			<th>Kode Barang</th>
      			<th>Nama Barang</th>
      			<th>Stok</th>
      			<th>Jumlah</th>

      			<td>action</td>
      		</tr>
      	</thead>

      	<tbody>
      		{{! $no=1}}
      		@foreach($data as $dat)
      		<tr>
      			<td>{{$no++}}</td>
      			<td>{{$dat->kode_barang}}</td>
      			<td>{{$dat->nama_barang}}</td>
      			<td>{{$dat->stok}}</td>
      			<td>{{$dat->jumlah}}</td>

      			<td><a href="/{{$dat->id}}/edit" class="btn btn-info">edit</a>
      				 <a href="/{{$dat->id}}/delete" class="btn btn-danger">hapus</a>
      			</td>
      		</tr>
			@endforeach
      	</tbody>
      </table>

	
@endsection