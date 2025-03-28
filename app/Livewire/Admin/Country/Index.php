<?php

namespace App\Livewire\Admin\Country;

use App\Models\Country;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{


    public function submit($formData,Country $country)
    {

        $validator = Validator::make($formData,[
            'name' => 'required|string|max:30'
        ],[
            '*.required' => 'فیلد عنوان ضروری است',
            '*.max' => 'حداکثر تعداد کارکتر ها : 30 ',
            '*.string' => 'فرمت نام اشتباه است ',
        ]);

        $validator->validate();

        $country->store($formData);
        $this->dispatch('success');

    }
    public function render()
    {
        $countries = Country::all();
        return view('livewire.admin.country.index',[
            'countries' => $countries
        ])->layout('layouts.admin.app');
    }
}
