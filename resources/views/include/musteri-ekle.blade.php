@extends('master')
@section('title')
Yeni Müşteri Tanımlama - Toplu Mail Yönetimi
@endsection
@section('css')

@endsection

@section('main')
<div class="page-wrapper">
  <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Yeni Müşteri</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Yeni Müşteri</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
      <div class="col">
        @if($errors->any())
          @foreach($errors->all() as $hatalar)
            <div class="alert alert-danger">{{$hatalar}}</div>
          @endforeach
        @endif
        @if(session('success'))
        <div class="alert alert-danger">{{session('success')}}</div>
        @endif
<form  action="{{route('musteri-ekle-post')}}" method="post">
    @csrf
  <div class="card">
          <div class="card-body">
            <h6 class="mb-0 text-uppercase">Yeni Müşteri</h6>
                    <hr/>
            <input class="form-control form-control-lg mb-3" type="text" name="adsoyad" placeholder="Müşteri Adı/Firma Adı" aria-label=".form-control-lg example">
              <input class="form-control form-control-lg mb-3" type="email" name="mail" placeholder="Müşteri E-posta" aria-label=".form-control-lg example">
                <input class="form-control form-control-lg mb-3" type="text" name="telefon" placeholder="Müşteri telefon" aria-label=".form-control-lg example">
                  <input class="btn btn-success mb-3" type="submit" name="İlet" value="Yeni Müşteri Ekle"aria-label=".form-control-lg example">
          </div>
        </div>
</form>


        <hr/>



      </div>
    </div>
    <!--end row-->
  </div>
</div>
@endsection
@section('js')

@endsection
