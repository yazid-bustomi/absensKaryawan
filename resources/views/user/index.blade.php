@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <h3 class="card-title px-4 pt-4">
                        List Absen
                        <a href="{{ route('absen') }}" class="btn btn-primary float-end">Absen</a>
                    </h3>
                        
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jam Masuk</th>
                                    <th scope="col">Jam Keluar</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Alasan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($absen as $item)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $item->hari }}</td>
                                        <td>{{ $item->checkin }}</td>
                                        <td>{{ $item->checkout }}</td>
                                        <td
                                            class=" 
                                        @if ($item->status == 'Masuk') text-success
                                        @elseif ($item->status == 'Sakit') text-danger
                                        @elseif ($item->status == 'Izin') text-warning @endif">
                                            {{ $item->status }}</td>
                                        <td>{{ $item->alasan }}</td>
                                    </tr>
                                    <?php $no++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
