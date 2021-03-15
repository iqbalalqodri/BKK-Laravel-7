@extends('backend.main')
@section('title','dahasboard')
    
@section('content-header')
<section class="content-header">
    <h1>
      @yield('title')
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">@yield('title')</li>
    </ol>
  </section>
    
@endsection

@section('content')
<br>
    <center><H1>Selamat Datang Di Sistem Informasi BKK SMK N 1 LAHAT</H1></center>
@php
@endphp

    @endsection