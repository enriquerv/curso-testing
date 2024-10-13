<?php

use Illuminate\Database\Seeder;
use Badcow\LoremIpsum\Generator;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        $cursos = [
            [
                "title" => "Automatización de pruebas",
                "image" => "https://images.unsplash.com/photo-1519389950473-47ba0277781c"
            ],
            [
                "title" => "Bases de datos",
                "image" => "https://images.unsplash.com/photo-1603791440384-56cd371ee9a7"
            ],
            [
                "title" => "Pruebas unitarias",
                "image" => "https://images.unsplash.com/photo-1525182008055-f88b95ff7980"
            ],
            [
                "title" => "Selenium IDE",
                "image" => "https://images.unsplash.com/photo-1504384308090-c894fdcc538d"
            ],
            [
                "title" => "Postman",
                "image" => "https://i.ytimg.com/vi/5e84rmWBNCs/maxresdefault.jpg"
            ],
            [
                "title" => "Pruebas de exploración",
                "image" => "https://images.unsplash.com/photo-1516251193007-45ef944ab0c6"
            ],
            [
                "title" => "Programación WEB",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpS6waiOnZArOod84aLhiWdhO2sFw9tDK6ig&s"
            ],
        ];

        foreach ($cursos as $curso) {
            $randomString = $this->getDynamicLoremIpsum();
            DB::table('products')->insert([
                'title' => $curso['title'],
                'description' => $randomString,
                'price' => rand(400.00, 3500.55),
                'image' => $curso['image'],
            ]);
        }
    }

    function getDynamicLoremIpsum($wordCount = 20)
    {
        // Crear una instancia del generador de Lorem Ipsum
        $generator = new Generator();

        // Generar un párrafo dinámico de palabras
        $paragraphs = $generator->getParagraphs(1);

        // Unir el párrafo y dividirlo en palabras
        $words = explode(' ', $paragraphs[0]);

        // Si hay menos palabras de las necesarias, repetir el proceso
        while (count($words) < $wordCount) {
            $paragraphs = $generator->getParagraphs(1);
            $words = array_merge($words, explode(' ', $paragraphs[0]));
        }

        // Tomar las primeras $wordCount palabras
        $words = array_slice($words, 0, $wordCount);
        // Unir las palabras en una cadena con espacios
        return implode(' ', $words) . '.';
    }
}
