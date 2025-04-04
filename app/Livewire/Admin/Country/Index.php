<?php

namespace App\Livewire\Admin\Country;

use App\Models\Country;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $countryId;

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

        $country->store($formData,$this->countryId);
        $this->reset();
        $this->dispatch('success',[
            'message' => 'عملیات با موفقیت انجام شد',
            'icon' => 'success'
        ]);

    }


    public function edit($countryId)
    {
        $country = Country::query()->firstWhere('id',$countryId);
        if ($country)
        {
            $this->name = $country->name;
            $this->countryId = $country->id;
        }

    }

    public function delete($countryId)
    {
        $country = Country::query()->firstWhere('id',$countryId)->delete();
        $this->dispatch('success',[
            'message' => 'عملیات حذف موفقیت امیز بود',
            'icon' => 'success'
        ]);

    }

    public function render()
    {
        $countries = Country::query()->orderByDesc('created_at')->paginate(20);
        return view('livewire.admin.country.index',[
            'countries' => $countries
        ])->layout('layouts.admin.app');
    }
}
