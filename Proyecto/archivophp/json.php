<?php
$libros=[];



$libros[]=[
    "libro1"=>[
        "Nombre"=>"Sigue Mi Voz",
        "Autor"=>"Ariana Godoy",
        "Año"=>1940,
        "Numero de paginas"=>100,
        "isbn"=>1234567890,
        "Capitulos"=>[
            [
            "Capitulo1"=>"Prologo",
            "PaginasCap1"=>24,
            ],
            [
            "capitulo2"=>"Sonido de las palomitas de Maíz",
            "Paginascap2"=>23,
            ],
            [
            "Capitulo3"=>"Final",
            "paginascap3"=>23
            ],
        ]
        ],
   
    "libro2"=>[
        "Nombre"=>"Lamento no ser como ella",
        "Autor"=>"Karla Lincon",
        "Año"=>2020,
        "Numero de paginas"=>100,
        "isbn"=>1234567890,
        "Capitulos"=>[
            [
            "Capitulo1"=>"Sentirse fragil",
            "PaginasCap1"=>24,
            ],
            [
            "capitulo2"=>"Ruptura",
            "Paginascap2"=>23,
            ],
            [
            "Capitulo3"=>"Inerte",
            "paginascap3"=>23,
            ],
        ]
        ],
        
       
    "libro3"=>[
        "Nombre"=>"Boulevard",
        "Autor"=>"Flor M Salvador",
        "Año"=>2022,
        "Numero de paginas"=>200,
        "isbn"=>1234567890,
        "Capitulos"=>[
            [
            "Capitulo1"=>"Gradas",
            "PaginasCap1"=>24,
            ],
            [
            "capitulo2"=>"Ultimo año escolar",
            "Paginascap2"=>23,
            ],
            [
            "Capitulo3"=>"Zev",
            "paginascap3"=>23,
            ],
        ]
        ],
        
    "libro4"=>[
        "Nombre"=>"Antes de Diciembre",
        "Autor"=>"Joana Marcus",
        "Año"=>2019,
        "Numero de paginas"=>54,
        "isbn"=>1234567890,
        "Capitulos"=>[
            [
            "Capitulo1"=>"Prologo",
            "PaginasCap1"=>24,
            ],
            [
            "capitulo2"=>"Juntos",
            "Paginascap2"=>23,
            ],
            [
            "Capitulo3"=>"ÉL",
            "paginascap3"=>23,
            ],
        ]
        ],
    "libro5"=>[
        "Nombre"=>"Besos y Bocetos",
        "Autor"=>"Raven Your",
        "Año"=>2018,
        "Numero de paginas"=>100,
        "isbn"=>1234567890,
        "Capitulos"=>[
            [
            "Capitulo1"=>"Verano",
            "PaginasCap1"=>24,
            ],
            [
            "capitulo2"=>"Rostro adiamantado",
            "Paginascap2"=>23,
            ],
            [
            "Capitulo3"=>"Angel en la playa",
            "paginascap3"=>23,
            ],
        ]
        ],
    "libro6"=>[
        "Nombre"=>"After the game",
        "Autor"=>"Kissingthebooth",
        "Año"=>2020,
        "Numero de paginas"=>150,
        "isbn"=>1234567890,
        "Capitulos"=>[
            [
            "Capitulo1"=>"Cuartos de final",
            "PaginasCap1"=>24,
            ],
            [
            "capitulo2"=>"Entrenamiento",
            "Paginascap2"=>23,
            ],
            [
            "Capitulo3"=>"Tess",
            "paginascap3"=>23,
            ],
        ]
        ],
    "libro7"=>[
        "Nombre"=>"Quedate conmigo",
        "Autor"=>"Onix",
        "Año"=>2019,
        "Numero de paginas"=>80,
        "isbn"=>1234567890,
        "Capitulos"=>[
            [
            "Capitulo1"=>"Casa",
            "PaginasCap1"=>24,
            ],
            [
            "capitulo2"=>"Luna",
            "Paginascap2"=>23,
            ],
            [
            "Capitulo3"=>"El dia despues",
            "paginascap3"=>23,
            ],
        ]
        ],
    "libro8"=>[
        "Nombre"=>"Hasta que su muerte nos separe",
        "Autor"=>"Blanca Mond",
        "Año"=>2018,
        "Numero de paginas"=>100,
        "isbn"=>1234567890,
        "Capitulos"=>[
            [
            "Capitulo1"=>"En sus manos",
            "PaginasCap1"=>24,
            ],
            [
            "capitulo2"=>"La gente cambia",
            "Paginascap2"=>23,
            ],

            "Capitulo3"=>"Planes",
            "paginascap3"=>23,
        ]
        ],
    "libro9"=>[
        "Nombre"=>"Un salto al vacio",
        "Autor"=>"Araceli Samudio",
        "Año"=>2020,
        "Numero de paginas"=>130,
        "isbn"=>1234567890,
        "Capitulos"=>[
            "Capitulo1"=>"Extra",
            "PaginasCap1"=>24,
            "capitulo2"=>"Sol",
            "Paginascap2"=>23,
            "Capitulo3"=>"Jurar",
            "paginascap3"=>23,
        ]
        ],
    "libro10"=>[
        "Nombre"=>"Blue Eyes",
        "Autor"=>"Amini",
        "Año"=>2019,
        "Numero de paginas"=>120,
        "isbn"=>1234567890,
        "Capitulos"=>[
            "Capitulo1"=>"Sydney",
            "PaginasCap1"=>24,
            "capitulo2"=>"La estrella mas grande",
            "Paginascap2"=>23,
            "Capitulo3"=>"Lexter",
            "paginascap3"=>23,
        ]
        ],
        ];

        echo json_encode($libros);
        ?>

