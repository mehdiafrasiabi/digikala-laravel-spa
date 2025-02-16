<?php

namespace App\Livewire\Admin\Country;

use App\Models\Country;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public $name;
    public $countryId;
    public function submit($formData , Country $country)
    {
        $validator = Validator::make($formData,[
           'name'=>'required|string|max:55',
        ],[
            '*.required'=>'فیلد ضروری است',
            '*.string'=>'فرمت نوشتاری شما اشتباه است ',
            '*.max'=>'حداکثر نوشتن : 55 کارکتر',
        ]);
        $validator->validate();
        $country->submit($formData,$this->countryId);
        $this->reset();
        $this->dispatch('success','عملیات با موفقیت انجام شد');
//        dd($this->dispatch('success'));
    }
    public function edit($country_id)
    {
        $country = Country::query()->where('id',$country_id)->first();
        if ($country) {
            $this->name = $country->name;
            $this->countryId = $country->id;
        }
    }

    public function delete($country_id)
    {
        Country::query()->where('id',$country_id)->delete();
        $this->dispatch('success','با موفقیت حدف شد');
    }
    public function render()
    {
        $countries= Country::all();
        return view('livewire.admin.country.index',[
             'countries' => $countries
                 ])->layout('layouts.admin.app');
    }
}
