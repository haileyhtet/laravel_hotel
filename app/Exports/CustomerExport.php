<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomerExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'name',
            'address',
            'job'
            
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Customer::all();
        return collect(Customer::getAllCustomer());

    }
}
