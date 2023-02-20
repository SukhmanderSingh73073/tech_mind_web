<?php

namespace App\Http\Controllers;

use App\Models\ClassGroup;
use App\Models\MyClass;
use App\Models\School;
use App\Models\Section;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class TestController extends Controller
{
  



    function testing(){

      $school =  School::where('id' , '1')
      ->first() ;
      $groups = ClassGroup::where('school_id' , $school->id)->pluck('id')->toArray() ;
      $classes = MyClass::whereIn('class_group_id' , $groups)->get() ;      
      $c_ids =$classes->pluck('id')->toArray() ; 
      $sections = Section::whereIn('my_class_id' ,$c_ids )->get() ; 
     
      $school['classes'] = $classes ;
      $school['sections'] = $sections ;

     return $school ; 

    }
}
