<?php

namespace App\Livewire\Admin\Country;

use App\Models\Country;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public $name;
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
        $country->submit($formData);
        $this->reset();
        $this->dispatch('success','با موفقیت افزوده شد .');
//        dd($this->dispatch('success'));
    }
    public function render()
    {
        $countries= Country::all();
        return view('livewire.admin.country.index',[
             'countries' => $countries
                 ])->layout('layouts.admin.app');
    }
}
