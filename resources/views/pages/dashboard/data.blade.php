@extends('pages.dashboard.dashboard')

@section('title', 'Peduli Diri - Daftar Data Perjalanan')

@section('halaman')
    <h1>Daftar Perjalanan</h1>
@endsection

@section('body')
    @php
    $no = 1;
    @endphp

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-paginate">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Suhu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $diri)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $diri->tanggal }}</td>
                                        <td>{{ $diri->created_at }}</td>
                                        <td>{{ $diri->lokasi }}</td>
                                        <td>{{ $diri->suhu }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="buttons">
                            <a href="{{ route('input') }}" class="btn btn-primary">Masukkan Data Perjalanan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
