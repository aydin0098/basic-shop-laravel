<?php

namespace App\Livewire\Admin\City;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $states = [];

    public $name;
    public $cityId;
    public $stateId;

    public function mount()
    {
        $this->states = State::all();

    }

    public function submit($formData,City $city)
    {
        $validator = Validator::make($formData,[
            'name' => 'required|string|max:30',
            'stateId' => 'required|exists:states,id',
        ],[
            'name.required' => 'فیلد عنوان ضروری است',
            '*.max' => 'حداکثر تعداد کارکتر ها : 30 ',
            '*.string' => 'فرمت نام اشتباه است ',
            'stateId.exists' => ' استان نامعتبر است',
            'stateId.required' => ' استان اجباری است',
        ]);
        $validator->validate();
        $this->resetValidation();
        $city->store($formData,$this->cityId);
        $this->reset();
        $this->dispatch('success','عملیات با موفقیت انجام شد');

    }


    public function edit($cityId)
    {
        $city = City::query()->firstWhere('id',$cityId);
        if ($city)
        {
            $this->name = $city->name;
            $this->cityId = $city->id;
            $this->stateId = $city->state_id;
        }

    }

    public function delete($cityId)
    {
        $city = City::query()->firstWhere('id',$cityId)->delete();
        $this->dispatch('success','عملیات حذف با موفقیت انجام شد');

    }

    public function render()
    {
        $cities = City::query()->with('state')->orderByDesc('created_at')->paginate(20);
        return view('livewire.admin.city.index',[
            'cities' => $cities
        ])->layout('layouts.admin.app');
    }
}
