<?php

namespace App\Controllers;
use App\Models\LearningModel;

class LearningController extends BaseController
{
    public function index()
    {
        $model = model(LearningModel::class);
        // $model=new LearningModel();
        $data['learning']=$model->getlearn();
        return view('learning',$data);
    }

    public function store()
    {
       $data=['title'=>$this->request->getvar('title'),
       'description'=>$this->request->getvar('description')
       ]; 
       $model = model(LearningModel::class);
       $learn=$model->createlearn($data);
        // echo $learn;

        if ($learn){
            return redirect('/');
        }else{
            return redirect('/');
        }
   }

   public function view($id)
   {
     
      $model = model(LearningModel::class);
      $viw=$model->viewLearn($id);
     print_r($viw);
     
  }

  public function update()
   {
     
     $id=$this->request->getvar('id');
     $data=['title'=>$this->request->getvar('title'),
     'description'=>$this->request->getvar('description')
     ]; 
     $model = model(LearningModel::class);
    
     $up['learning']=$model->getupdate($id,$data);

     if ($up >=1){
        return redirect('/');
    }else{
        return redirect('/');
    } 
  }

  public function delete()
   {
     
     $id=$this->request->getvar('id');
     $model = model(LearningModel::class);
    
     $del=$model->getdelete($id);

     if ($del){
        return redirect('/');
    }else{
        return redirect('/');
    } 
  }

}  