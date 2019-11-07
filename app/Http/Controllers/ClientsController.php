<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\ClientContactPerson;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $clients = Client::all();
        return view('dashboard.clients.all')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.clients.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    
        $this->validate($request, [
            'date_of_contract' => 'required|date',
            'date_of_termination' => 'required|date',
            'company_name' => 'required',
            'company_address' => 'required',
            'company_email' => 'required|email',
            'schedule_of_cut_off' => 'nullable|date',
            'schedule_of_payroll' => 'nullable|date'
        ]);
    

        $client = new Client;
        $client->date_of_contract = $request->input('date_of_contract');
        $client->date_of_termination = $request->input('date_of_termination');
        $client->company_name = $request->input('company_name');
        $client->company_address = $request->input('company_address');
        $client->bir_tin_number = $request->input('bir_tin_number');
        $client->peza_number = $request->input('peza_number');
        $client->official_company_no = $request->input('official_company_no');
        $client->company_email = $request->input('company_email');
        $client->schedule_of_cut_off = $request->input('schedule_of_cut_off');
        $client->schedule_of_payroll = $request->input('schedule_of_payroll');
        $client->save();

        $current_client = Client::max('id');

        var_dump($request->input('name'));


        return redirect('dashboard/clients')->with('success', 'Client Added');
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
        $client = Client::find($id);
        $data = [
            'post_title' => 'Edit Client',
            'client' => $client
        ];
        return view('dashboard.clients.show')->with('data', $data);
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
