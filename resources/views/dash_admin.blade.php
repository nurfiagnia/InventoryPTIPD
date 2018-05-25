@extends('layouts.layout')

@section('title')
	Dashboard Admin
@endsection


@section('content')
<!-- !PAGE CONTENT! -->

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <a href="/table barang">
      <div class="w3-container w3-orange w3-padding-16">
        <div class="w3-left"><img src="/images/dbarang.PNG" style="width: 80px;height: 80px"></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Data Barang </h4>
      </div>
    </div>
    </a>
    
    <div class="w3-quarter">
      <a href="/table ruangan">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><img src="/images/dtruangan.PNG" style="width: 80px;height: 80px"></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Data Ruangan</h4>
      </div>
    </div>
    </a>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><img src="/images/admins.PNG" style="width: 80px;height: 80px"></div>
        <div class="w3-right">
          <div style="display: none;">
          {{! $jumAdmin = 0}}
          @foreach($tbAdmin as $i)
            {{! $jumAdmin++}}
          @endforeach
          </div>
          <h3>{{$jumAdmin}}</h3>
          
        </div>
        <div class="w3-clear"></div>
        <h4>Data Admin</h4>
      </div>
    </div>
    
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-text-white w3-padding-16">
        <div class="w3-left"><img src="/images/Users.PNG" style="width: 80px;height: 80px"></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4> Data Users</h4>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>New Visitors</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>New Users</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Bounce Rate</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
@endsection