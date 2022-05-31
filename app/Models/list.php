<?php

namespace App\Models;


class Listing {
    //get all data
    public static function all(){
        return 
            [
                ['id'=>'1',
                'name'=>'jeff',
                "DOB"=>"May 17 1996",
                "job"=>"software engineer"],
                ['id'=>'2',
                'name'=>'rose',
                "DOB"=>"March 24 1997",
                "job"=>"sales"],
                ['id'=>'3',
                'name'=>'shan',
                "DOB"=>"August 24 2017",
                "job"=>"none"]
            
        ];
    }
    //get single data
    public static function find($id){
        $listing = self::all();
        foreach($listing as $list){
            if($list['id'] == $id){
                return $list;
            }
        }
    }
   
}