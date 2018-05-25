@extends('layouts.layout')

@section('title')
    table_ruangan
@endsection

@section('content')


      <h3>Data Ruangan</h3>
      
      <div class="container" style="padding-top:30px; padding-bottom: 15px;">
	<a href="/inputRuangan" class="btn btn-success">Tambah Data</a>
      </div>
      <table class="table table-hover">
      	<thead>
      		<tr>
      			<th>No</th>
      			<th>Kode Ruangan</th>
      			<th>Nama Ruangan</th>
      			<th>Jumlah</th>
      			<th>Keterangan</th>

      			<td>action</td>
      		</tr>
      	</thead>

      	<tbody>
      		{{! $no=1}}
      		@foreach($data as $dat)
      		<tr>
      			<td>{{$no++}}</td>
      			<td>{{$dat->kode_ruangan}}</td>
      			<td>{{$dat->nama_ruangan}}</td>
      			<td>{{$dat->jumlah}}</td>
      			<td>{{$dat->keterangan}}</td>

      			<td><a href="/{{$dat->id}}/editRuangan" class="btn btn-info">edit</a>
      			    <a href="/{{$dat->id}}/delete" class="btn btn-danger">hapus</a>
      			</td>
      		</tr>
			@endforeach
      	</tbody>
      </table>
	
@endsection