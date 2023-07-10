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
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam Masuk</th>
                            <th scope="col">Jam Keluar</th>
                            <th scope="col">Status</th>
                            <th scope="col">Alasan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($user as $item)
                            @foreach ($item->absen as $i)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $i->hari }}</td>
                                    <td>{{ $i->checkin }}</td>
                                    <td>{{ $i->checkout }}</td>
                                    <td
                                        class=" 
                                    @if ($i->status == 'Masuk') text-success
                                    @elseif ($i->status == 'Sakit') text-danger
                                    @elseif ($i->status == 'Izin') text-warning @endif">
                                        {{ $i->status }}</td>
                                    <td>{{ $i->alasan }}</td>
                                </tr>
                                <?php $no++; ?>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
