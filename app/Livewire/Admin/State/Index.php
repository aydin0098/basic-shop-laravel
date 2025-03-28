<?php

namespace App\Livewire\Admin\State;

use App\Models\Country;
use App\Models\State;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $countries = [];

    public $name;
    public $stateId;
    public $countryId;

    public function mount()
    {
        $this->countries = Country::all();

    }

    public function submit($formData,State $state)
    {

        $validator = Validator::make($formData,[
            'name' => 'required|string|max:30',
            'countryId' => 'required|exists:countries,id',
        ],[
            '*.required' => 'فیلد عنوان ضروری است',
            '*.max' => 'حداکثر تعداد کارکتر ها : 30 ',
            '*.string' => 'فرمت نام اشتباه است ',
            'countryId.exists' => 'کشور نامعتبر است',
        ]);
        $validator->validate();
        $this->resetValidation();
        $state->store($formData,$this->stateId);
        $this->reset();
        $this->dispatch('success','عملیات با موفقیت انجام شد');

    }


    public function edit($stateId)
    {
        $state = State::query()->firstWhere('id',$stateId);
        if ($state)
        {
            $this->name = $state->name;
            $this->stateId = $state->id;
            $this->countryId = $state->country_id;
        }

    }

    public function delete($stateId)
    {
        $state = State::query()->firstWhere('id',$stateId)->delete();
        $this->dispatch('success','عملیات حذف با موفقیت انجام شد');

    }

    public function render()
    {
        $states = State::query()->with('country')->orderByDesc('created_at')->paginate(20);
        return view('livewire.admin.state.index',[
            'states' => $states
        ])->layout('layouts.admin.app');
    }
}
