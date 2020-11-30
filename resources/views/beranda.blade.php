
@extends('Layout/usertemplate')
@section('title', 'Beranda')


@section('content')
<!-- Page Content -->
<div class="row">
  <div class="col-md-6">
   <div class="card-artikel">
    <h1 class="beranda-title">WELCOME TO BLOG</h1>
    <p>Blog berasal dari kata Web dan Log (WEBLOG) yang berarti catatan online (yang berada di web).Pengertian yang lebih lengkap, blog adalah situs web yang berisi tulisan, artikel atau informasi bermanfaat yang diupdate (diperbaharui) secara teratur dan dapat diakses secara online baik untuk umum maupun pribad.</p>
  </div>
</div>
<div class="col-md-6">
   <img src="{{ url('tempelateuser/css/1.svg') }}" alt="" class="img-beranda">
</div>
</div>
<!-- /.container -->
@endsection
