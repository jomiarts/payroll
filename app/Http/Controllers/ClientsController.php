<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\ClientContactPerson;
use App\ClientContractRate;



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
            'basic_pay' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'overtime_pay' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'night_differential_pay' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'cola' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'five_days_incentive_pay' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'uniform_allowance' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'thth_month_pay' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'sss_premium' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'philhealth' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'insurance_fund' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'pag_ibig_fund' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
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
      
       $current_client_id = Client::max('id');
       
       if($current_client_id) {

            if($request->input('contact_person')) {
    
                $this->validate($request, [
                    'contact_person.*.name' => 'required',
                    'contact_person.*.email_address' => 'required|email'
                ]);
    
                foreach($request->input('contact_person') as $contact_person) {
                    $ClientContactPerson = new ClientContactPerson;
                    $ClientContactPerson->client_id = $current_client_id;
                    $ClientContactPerson->name = $contact_person['name'];
                    $ClientContactPerson->position = $contact_person['position'];
                    $ClientContactPerson->department = $contact_person['department'];
                    $ClientContactPerson->email = $contact_person['email_address'];
                    $ClientContactPerson->contact_number = $contact_person['contact_number'];
                    $ClientContactPerson->save();
                } 
           }

           $ClientContractRate = new ClientContractRate;
           $ClientContractRate->client_id = $current_client_id;
           $ClientContractRate->contract_rate_type = $request->input('contract_type');
           $ClientContractRate->basic_pay = $request->input('basic_pay');
           $ClientContractRate->overtime_pay = $request->input('overtime_pay');
           $ClientContractRate->night_differential_pay = $request->input('night_differential_pay');
           $ClientContractRate->cola = $request->input('cola');
           $ClientContractRate->five_days_incentive_pay = $request->input('five_days_incentive_pay');
           $ClientContractRate->uniform_allowance = $request->input('uniform_allowance');
           $ClientContractRate->uniform_allowance = $request->input('thirteen_month_pay');
           $ClientContractRate->sss_premium = $request->input('sss_premium');
           $ClientContractRate->philhealth = $request->input('philhealth');
           $ClientContractRate->insurance_fund = $request->input('insurance_fund');
           $ClientContractRate->insurance_fund = $request->input('pag_ibig_fund');
           $ClientContractRate->save();
       }     
       
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
        return view('dashboard.clients.show')
        ->with('client', $client)
        ->with('client_contact_persons', $client->client_contact_persons)
        ->with('client_contract_rates', $client->client_contract_rates);
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
        $client = Client::find($id);
        $last_index = count($client->client_contact_persons) - 1;
        return view('dashboard.clients.edit')
        ->with('client', $client)
        ->with('client_contact_persons', $client->client_contact_persons)
        ->with('client_contract_rates', $client->client_contract_rates)
        ->with('contact_persons_last_index',$last_index);
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
        /*
        $this->validate($request, [
            'date_of_contract' => 'required|date',
            'date_of_termination' => 'required|date',
            'company_name' => 'required',
            'company_address' => 'required',
            'company_email' => 'required|email',
            'basic_pay' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'overtime_pay' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'night_differential_pay' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'cola' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'five_days_incentive_pay' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'uniform_allowance' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'thth_month_pay' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'sss_premium' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'philhealth' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'insurance_fund' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'pag_ibig_fund' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'schedule_of_cut_off' => 'nullable|date',
            'schedule_of_payroll' => 'nullable|date'
        ]);

        $client = Client::find(id);
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
        */

        if($request->input('contact_person')) {
            
            foreach($request->input('contact_person') as $contact_person) {

                //0 edit
                //1 add
                //2 Delete
                $ClientContactPerson = ClientContactPerson::find($contact_person['client_contact_person_id']);

                if($contact_person['client_contact_person_status'] == 0) {
                    //Edit
                    $ClientContactPerson->name = $contact_person['name'];
                    $ClientContactPerson->position = $contact_person['position'];
                    $ClientContactPerson->department = $contact_person['department'];
                    $ClientContactPerson->email = $contact_person['email_address'];
                    $ClientContactPerson->contact_number = $contact_person['contact_number'];
                    $ClientContactPerson->save();

                } elseif($contact_person['client_contact_person_status'] == 1){
                    //Add
                    $ClientContactPerson = new ClientContactPerson;
                    $ClientContactPerson->client_id = $id;
                    $ClientContactPerson->name = $contact_person['name'];
                    $ClientContactPerson->position = $contact_person['position'];
                    $ClientContactPerson->department = $contact_person['department'];
                    $ClientContactPerson->email = $contact_person['email_address'];
                    $ClientContactPerson->contact_number = $contact_person['contact_number'];
                    $ClientContactPerson->save();
                   
                } else {
                    //Delete
                    $ClientContactPerson->delete();

                }
                
            }
           
        }

        $ClientContractRate = ClientContractRate::find($id);
        if(empty($ClientContractRate)) {

            $ClientContractRate = new ClientContractRate;
            $ClientContractRate->client_id = $id;
            
        }
         
        $ClientContractRate->contract_rate_type = $request->input('contract_type');
        $ClientContractRate->basic_pay = $ClientContractRate->getPriceNumericValue($request->input('basic_pay'));
        $ClientContractRate->overtime_pay = $ClientContractRate->getPriceNumericValue($request->input('overtime_pay'));
        $ClientContractRate->night_differential_pay = $ClientContractRate->getPriceNumericValue($request->input('night_differential_pay'));
        $ClientContractRate->cola = $ClientContractRate->getPriceNumericValue($request->input('cola'));
        $ClientContractRate->five_days_incentive_pay = $ClientContractRate->getPriceNumericValue($request->input('five_days_incentive_pay'));
        $ClientContractRate->uniform_allowance = $ClientContractRate->getPriceNumericValue($request->input('uniform_allowance'));
        $ClientContractRate->uniform_allowance = $ClientContractRate->getPriceNumericValue($request->input('thirteen_month_pay'));
        $ClientContractRate->sss_premium = $ClientContractRate->getPriceNumericValue($request->input('sss_premium'));
        $ClientContractRate->philhealth = $ClientContractRate->getPriceNumericValue($request->input('philhealth'));
        $ClientContractRate->insurance_fund = $ClientContractRate->getPriceNumericValue($request->input('insurance_fund'));
        $ClientContractRate->insurance_fund = $ClientContractRate->getPriceNumericValue($request->input('pag_ibig_fund'));
        $ClientContractRate->save();

       return redirect('dashboard/clients');
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
