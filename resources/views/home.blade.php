@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group row ml-5">
            <h5 class="col-sm-3 mt-2 ml-5">Tanggal Peminjaman :</h5>
            <input type="date" class="form-control col-sm-2" style="margin:0 0 20px -70px;">
            <h5 class="col-sm-4 mt-2" style="margin-right: 10px; ">Tanggal Pengembalian :</h5>
            <input type="date" class="form-control col-sm-2" style="margin:0 0 20px -150px;">
            <a href=""><center><input type="submit" value="Pinjam" class="btn btn-success ml-3"></center></a>
    </div>
    <h5>Barang dan Ruang yang tersedia :</h5>
        <table class="table table-striped bg-light">
        <thead>
        <tr>
            <th>Nama Barang / Ruangan</th>
            <th>Keterangan</th>
            <th>Stok Barang</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Router</td>
            <td>Jenis blablabla</td>
            <td></td>
            <th><input type="checkbox" name=""></th>
        </tr>
        <tr>
            <td>Switch</td>
            <td>Jenis blablabla</td>
            <td></td>
            <th><input type="checkbox" name=""></th>
        </tr>
        <tr>
            <td>LAN</td>
            <td>Jenis blablablabla</td>
            <td></td>
            <th><input type="checkbox" name=""></th>
        </tr>
        </tbody>
        </table>
        <a href="/verifikasi"><input type="submit" name="" value="Pinjam Sekarang!" class="btn btn-success" style="float: right">
        </a>
</div>
@endsection
