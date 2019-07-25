<?php

namespace App\Http\Controllers\BackEnd;

use App\Front\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\BackEnd\Admins\StoreRequest;
class AdminsController extends BackEndController
{

    public function __construct(Admin $model)
    {

        parent::__construct($model);

        $this->middleware("admin");

    }


    public function store(StoreRequest $request){

        $requestArray = $request->all();
        $requestArray['password']= Hash::make($requestArray['password']);
        $this->model->create($requestArray);
        alert()->success("Added" , "you have been add an admin");
        return redirect("admin/admins");
    }

    public function update(StoreRequest $request , $id)
    {
        $update =   Admin::where("id" , $id)->update($request->except(['_method',"_token","password_confirmation" , "group"]))->get();
        alert()->success("Updated" , "you have been Updated an admin");
        return redirect()->route('admins.index');
    }

    
    public function showRegistrationForm()
    {
        return view('back-end/admins/create' , [
            'modelSingleName'=>'Admin',
            'modelPageDesc'=>"Create Admin Form",
            'modelPluralName'=>'admins'
        ]);
    }
}
