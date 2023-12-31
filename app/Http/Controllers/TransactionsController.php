<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
        //
        //$transactions = Transactions::all();
        // $transactions = Transactions::with(['car', 'customer'])->get();
        $transactions = DB::table('transactions')->join('cars', 'transactions.car_id', '=', 'cars.id')->join('users', 'transactions.id_customer', '=', 'users.id')
        ->select(
            'transactions.id',
            'transactions.status',
            'transactions.total_price',
            'transactions.rental_start as rental_start',
            'transactions.rental_end as rental_end',
            'cars.brand as car_brand',
            'cars.model as car_model',
            'users.username as customer_name'
        ) ->get();
   
        return view('admin.transactions', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        //
        // $car_id = $request->$id;
       $car_id = $id;
       $userId = Auth::id();

       $request ->validate([
        'rental_start' => 'required',
        'rental_end' => 'required',
       ]);

        $transaksi = new Transactions;
        $transaksi->total_price = $request->input('total_pricetotal_price');

        $rental_start = Carbon::createFromFormat('m/d/Y', $request->input('rental_start'));
        $rental_end = Carbon::createFromFormat('m/d/Y', $request->input('rental_end'));
        
        if ($rental_end->isBefore($rental_start)) {
            return back()->with('error', 'Drop off date cannot be before the Pick up date');
        } else {
            echo "Valid date range";
        }
        
        function createUniqueRentCode(): string{
        do {
            $randomNumber = random_int(100000, 999999);
            $rentCode = 'rnt-' . $randomNumber;
        } while (Transactions::where('rent_code', $rentCode)->exists());
        return $rentCode;}
        $rentCode = createUniqueRentCode();

        $transaction = new Transactions([
            'car_id' => $car_id,
            'id_customer' => $userId,
            'rent_code' => $rentCode, // Adjust as needed
            'total_price' => $request->input('total_price'),
            'rental_start' => $rental_start,
            'rental_end' => $rental_end,
            'status' => "success", // Adjust as needed
            // 'status' => $request->input('status'), // Adjust as needed
        ]);
        $transaction->save();
        return redirect()->route('main')->with('success', 'Car booked Successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
