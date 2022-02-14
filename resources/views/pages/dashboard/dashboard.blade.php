@extends('master')

@section('title', 'Peduli Diri - Menu Utama')

@section('halaman')
    <h1>Peduli Diri</h1>
@endsection

@section('body')
    Test
@endsection

@section('content')

@include('essentials.navbar')
@include('essentials.sidebar')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            @yield('halaman')
        </div>

        @yield('body')

    </section>
</div>

@endsection
