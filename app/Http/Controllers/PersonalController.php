<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function personal()
    {
        $persons =
        [
            ['Nombre' => 'Bryan',
            'Apellido' => 'Quisaguano',
            "Contacto"=>'0994124186',
            "Web"=>'https://github.com/BryanArmando',
            "img"=>'https://avatars.githubusercontent.com/u/66704761?v=4'
            ],

            ["Nombre"=>'Christian',
            "Apellido"=>'Soledispa',
            "Contacto"=>'0993200727',
            "Web"=>'https://github.com/ChristianSoledispa',
            "img"=>'https://avatars.githubusercontent.com/u/85883884?s=400&u=118a64409b8ab1850626250f08226179359fbfa9&v=4'
        ],
            ["Nombre"=>'Luis',
            "Apellido"=>'Catota',
            "Contacto"=>'0995645966',
            "Web"=>'https://github.com/Lseb1103',
            "img"=>'https://avatars.githubusercontent.com/u/66772757?v=4'
    ],

    ["Nombre"=>'Josue',
            "Apellido"=>'Singaña',
            "Contacto"=>'0989600727',
            "Web"=>'https://github.com/JosueEPN',
            "img"=>'https://avatars.githubusercontent.com/u/65979995?v=4'
        ],
        ["Nombre"=>'Mateo',
            "Apellido"=>'Cevallos',
            "Contacto"=>'0987812327',
            "Web"=>'https://github.com/matojo074',
            "img"=>'https://avatars.githubusercontent.com/u/66786471?v=4'
        ],
        ["Nombre"=>'Diana',
            "Apellido"=>'Almeida',
            "Contacto"=>'0987789727',
            "Web"=>'https://github.com/AlmDiana',
            "img"=>'https://avatars.githubusercontent.com/u/58041267?v=4'
    ],

        ["Nombre"=>'Michaelle',
            "Apellido"=>'Valenzuela',
            "Contacto"=>'0987900727',
            "Web"=>'https://github.com/MichaelGuanoluisa',
            "img"=>'https://avatars.githubusercontent.com/u/66236038?v=4'
        ]

            
        ];


        return view('personal',compact('persons'));
    }
}
