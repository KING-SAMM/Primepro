<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prototype 
{
    use HasFactory;

    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Prototype One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Eveniet expedita sint quo qui optio! Dolore, corrupti molestias obcaecati saepe voluptas aliquid sint qui perferendis dignissimos optio pariatur quae magni blanditiis vero, ut culpa assumenda dolorum? Autem, quas distinctio?'
            ],
            [
                'id' => 2,
                'title' => 'Prototype Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Eveniet expedita sint quo qui optio! Dolore, corrupti molestias obcaecati saepe voluptas aliquid sint qui perferendis dignissimos optio pariatur quae magni blanditiis vero, ut culpa assumenda dolorum? Autem, quas distinctio?'
            ]
        ];
    }

    public static function find($id)
    {
        // Get all prototypes
        $prototypes = self::all();

        // Loop through $prototypes unti a match is found
        foreach($prototypes as $prototype)
        {
            if($prototype['id'] == $id )
            {
                return $prototype;
            }
        }
    }
}
