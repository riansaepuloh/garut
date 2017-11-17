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
                        <li class="active">Data Kecamatan</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
            	<a href="{{route('kecamatan.create')}}"><button style="float:right;margin-top:17px"  type="button" class="btn  btn-raised btn-success waves-effect">Tambah Data Kecamatan</button></a>
            </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> Data Kecamatan </h2>
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
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>KODE KECAMATAN</th>
                                    <th>NAMA KECAMATAN</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>KODE KECAMATAN</th>
                                    <th>NAMA KECAMATAN</th>
                                    <th>AKSI</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            	@foreach ($kecamatan1 as $kecamatan)
                                <tr>
                                    <td>{{ $kecamatan->kd_kecamatan }}</td>
                                    <td>{{ $kecamatan->nama_kecamatan }}</td>
                                    <td>
                                    {{-- edit --}}
                                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                        <button class="btedit" href="{{ route('kecamatan.edit',$kecamatan) }}"> <i class="material-icons">mode_edit</i></button>
                                    </div>
                                    </div>
                                    {{-- delete --}}
                                    <form action="{{ route('kecamatan.destroy',$kecamatan) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                        <button type="submit" class="bthapus">
                                        <i class="material-icons">delete</i> </button>
                                    </div>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples --> 

@endsection