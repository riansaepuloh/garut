@extends('layouts.app')
@section('leftbar')
<!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="image"> <img src="{{ URL::asset('assets/images/random-avatar1.jpg')}}" width="48" height="48" alt="User" /> </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="{{ route('logout') }}" class="mega-menu" data-close="true" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Sign Out</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Data Master</span></a>
                    <ul class="ml-menu">
                        <li><a href="{{url('kecamatan')}}">Kecamatan</a> </li>
                        <li><a href="{{url('desa')}}">Desa</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu --> 
    </aside>
       
@endsection

