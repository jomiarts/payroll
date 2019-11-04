<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

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
        $data = [
            'post_title' => 'Clients',
            'clients' => $clients
        ];
     
        return view('dashboard.clients.all')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'post_title' => 'Add New Client'
        ];
        return view('dashboard.clients.create')->with('data', $data); 
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
            'date_of_contract' => 'nullable|date',
            'date_of_termination' => 'nullable|date',
            'company_email' => 'nullable|email',
            'email_add' => 'nullable|email',
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
        $client->name = $request->input('name');
        $client->position = $request->input('position');
        $client->department = $request->input('department');
        $client->email_add = $request->input('email_address');
        $client->contact_number = $request->input('contact_number');
        $client->schedule_of_cut_off = $request->input('schedule_of_cut_off');
        $client->schedule_of_payroll = $request->input('schedule_of_payroll');
        $client->save();

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
