@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h3>List Absen</h3>
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
@endsection
