@extends('layouts.app')
@section('content')
@push('styles')
    <link href="{{ asset('css/frs.main.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/frs.custom.js') }}"></script>
@endpush
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Menu</h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu" >
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
           
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-primary">
                    <i class="fa fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
    
            </div>
        </nav>
    </div>

</div>    
@endsection