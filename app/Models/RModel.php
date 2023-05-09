<?php

namespace App\Models;

 
class RModel extends Model
{
    protected $primaryKey="id";
    public $timespatams = true;
    public $incremeting = true;
    protected $fillable=[];

    public function beforeSave(){
        return true;
    }


    public function save(array $options =[]){
        try{

            
           if(!$this->beforeSave()){
            return false;
           }
 
           return parent ::salve($options);
        }catch(\Exception $e){
            throw new \Exception ($e->getMessage());
        }
    }
}
