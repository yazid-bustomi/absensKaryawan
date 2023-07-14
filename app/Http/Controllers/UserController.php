<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (Auth::user()->role != 'karyawan') {
            return abort(401);
        } else {
            $user = Auth::user()->id;
            $absen = Absen::where('user_id', $user)->get();
            return view('user.index', compact('absen'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // untuk memvalidasi harus karyawan yang bisa mengakses halaman ini
        if (Auth::user()->role != 'karyawan') {
            return abort(401);
        }
        $user = Auth::user();
        $today = date('Y-m-d');

        $absenToDay = Absen::where('user_id', $user->id)
            ->whereDate('hari', $today)
            ->first();
        
        return view('user.create', compact('user', 'absenToDay'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $today = date('Y-m-d');

        // mmebuat rules supaya wajib
        $rules = [
            'status' => 'required',
        ];
        
        // jika bukan masuk status yang di isi field status harus di isi. 
        if ($request->status != "Masuk") {
            $rules['alasan'] = 'required';
        }
        
        $request->validate($rules);

        //check apakah ada absen hari ini
        $absenToDay = Absen::where('user_id', $user->id)
        ->whereDate('hari', $today)
        ->first();

        //jika sudah checkin maka lakukan aksi ini
        if ($absenToDay && $request -> has('checkoutBtn')){
            $absenToDay->checkout = $request->jam;
            $absenToDay->save();
            return redirect('/users');
        }

        // jika belum checkin maka lakukan aksi ini
        if (!$absenToDay && $request -> has('checkinBtn')){
            if($request->status == "Masuk"){
                $absen = new Absen();
                $absen->hari = $request->hari;
                $absen->checkin = $request->jam;
                $absen->status = $request->status;
                $absen->alasan = $request->alasan;
                $absen->user_id = $request->user_id;
                $absen->save();
                return redirect('/users');
            } else{
                $absen = new Absen();
                $absen->hari = $request->hari;
                $absen->checkin = $request->jam;
                $absen->checkout = $request->jam;
                $absen->status = $request->status;
                $absen->alasan = $request->alasan;
                $absen->user_id = $request->user_id;
                $absen->save();
                return redirect('/users');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
