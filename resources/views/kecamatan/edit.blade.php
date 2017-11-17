@extends('layouts.app')
@include('layouts.navbar')
@include('layouts.leftbar')
@section('content')
<div class="block-header">
        <div class="row">
            <div class="col-md-8 col-sm-6 ">
                <div class="h-left clearfix">
                    <ol class="breadcrumb breadcrumb-col-pink p-l-0">
                        <li><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="">Data Kecamatan</li>
                        <li class="active"> Tambah Data Kecamatan</li>
                    </ol>
                </div>
            </div>
            </div>
        </div>
<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> UPdate Data Kecamatan </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- kd kecamatan -->
                 
                    <div class="body">
                        <form action="{{ route('kecamatan.update',$kecamatan1) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="row clearfix">
                                <input type="hidden" name="kd_kecamatan" value="{{ $kecamatan1->kd_kecamatan }}">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_kecamatan" placeholder="Nama Kecamatan" value="{{ $kecamatan1->nama_kecamatan }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input name="submit" type="submit" class="btn btn-raised btn-primary btn-lg m-l-15 waves-effect" value="Simpan">
                                   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection