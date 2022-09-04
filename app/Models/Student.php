<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public static function students(){
        return [
          0 =>[
              'id'=>1,
              'name'=>'safiqul islam',
              'phone'=>'0147896325',
              'address'=>'dhaka',
              'image'=>'assets/img/01.jpg'
          ],
            1 =>[
                'id'=>2,
                'name'=>'Rafiqul islam',
                'phone'=>'0147896325',
                'address'=>'dhaka',
                'image'=>'assets/img/2.jpg'
            ],
            2 =>[
                'id'=>3,
                'name'=>'safiqul islam',
                'phone'=>'0147896325',
                'address'=>'dhaka',
                'image'=>'assets/img/3.jpg'
            ],
            3 =>[
                'id'=>4,
                'name'=>'Rafiqul islam',
                'phone'=>'0147896325',
                'address'=>'dhaka',
                'image'=>'assets/img/004.jpg'
            ],
        ];
    }


}
