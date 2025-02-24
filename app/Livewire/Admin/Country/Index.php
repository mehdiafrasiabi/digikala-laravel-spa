<?php

namespace App\Livewire\Admin\Country;

use App\Models\Country;
use App\Repository\CountryRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $name;
    public $countryId;
    private $repository;

    public function boot(CountryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
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
        $this->repository->submit($formData,$this->countryId);
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
        $countries= Country::query()->paginate(10);
        return view('livewire.admin.country.index',[
             'countries' => $countries
                 ])->layout('layouts.admin.app');
    }
}
