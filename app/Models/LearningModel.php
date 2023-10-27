<?php

use CodeIgniter\Model;

class LearningModel extends Model{



   protected $table = 'learning';
   protected $allowedFields=['title','description'];

   

   public function getlearn()  
   {
      return  $this->orderBy('id','DESC')->findAll();

   }

   public function createlearn($data)  
   {
    
      return  $this->insert($data);

   }

   public function viewLearn($id)  
   {
      return  $this->where('id',$id)->first();

   }
   
   public function getupdate($id,$data)  
   {
    
      return  $this->update($id,$data);
   }

   public function getdelete($id)  
   {
      
      return  $this->delete($id);
   }


}

?>