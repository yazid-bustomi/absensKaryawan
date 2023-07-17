@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('absen') }}">
            @csrf

            @if (count($errors) > 0)
                <div class="alert alert-danger form-group">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input type="hidden" name="user_id" id="user_id" name="user_id" value="{{ Auth::user()->id }}">

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->name }}"
                    readonly>
            </div>

            <div class="form-group mt-3">
                <label for="hari">Tanggal</label>
                <input type="text" class="form-control" id="hari" name="hari" value="{{ date('Y-m-d') }}"
                    readonly>
            </div>

            <div class="form-group mt-3">
                <label for="jam">Jam</label>
                <input type="text" class="form-control" id="jam" name="jam" value="{{ date('h:i:s') }}"
                    readonly>
            </div>

            <div class="form-group mt-3">
                <label for="status">Status :</label>
                <select class="form-select" aria-label="Masuk" id="status" name="status">
                    <option selected value="">Silahkan Pilih Status</option>
                    <option value="Masuk">Masuk</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Izin">Izin</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="alasan">Alasan </label>
                <input type="text" class="form-control" id="alasan" name="alasan">
            </div>

            {{-- @dd($absenToDay->checkout) --}}
            @if ($absenToDay)

                {{-- Jika sudah checkin --}}
                @if ($absenToDay->checkout === null)
                    {{-- Jika belum Checkout --}}
                    <button type="submit" class="btn btn-primary mt-4" name="checkinBtn" disabled>Check In</button>
                    <button type="submit" class="btn btn-primary mt-4" name="checkoutBtn">Check Out</button>
                @else

                    {{-- Jika sudah checkOut --}}
                    <button type="submit" class="btn btn-primary mt-4" name="checkinBtn" disabled>Check In</button>
                    <button type="submit" class="btn btn-primary mt-4" name="checkoutBtn" disabled>Check Out</button>
                @endif
                
            @else
                {{-- Jika belum Checkin --}}
                <button type="submit" class="btn btn-primary mt-4" name="checkinBtn">Check In</button>
                <button type="submit" class="btn btn-primary mt-4" name="checkoutBtn" disabled>Check Out</button>
            @endif
            
        </form>
    </div>

@endsection
