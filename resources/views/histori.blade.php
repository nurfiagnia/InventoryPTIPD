@extends('layouts.app')
@section('content')
	<div class="container">
		<h5>Barang dan Ruangan yang Anda Pinjam :</h5>
		<form method="POST" action="">
        <table class="table table-striped bg-light">
        <thead>
        <tr>
        	<th>Tanggal Peminjaman</th>
        	<th>Tanggal Pengembalian</th>
            <th>Nama Barang / Ruangan</th>
            <th>Keterangan</th>
            <th>Jumlah Barang</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        	<td></td>
        	<td></td>
            <td>Router</td>
            <td>Jenis blablabla</td>
            <td></td>
            <th></th>
        </tr>
        <tr>
        	<td></td>
        	<td></td>
            <td>Switch</td>
            <td>Jenis blablabla</td>
            <td></td>
            <th></th>
        </tr>
        <tr>
        	<td></td>
        	<td></td>
            <td>LAN</td>
            <td>Jenis blablablabla</td>
            <td></td>
            <th></th>
        </tr>
        </tbody>
        </table>
    </form>
	</div>
@endsection