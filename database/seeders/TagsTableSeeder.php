<?php

namespace Database\Seeders;

use Database\Factories\TagFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    protected $tagsData; // Поле для хранения массива данных

    public function __construct()
    {
        $this->tagsData = [
            'Долголетие',
            'Здоровье сердца',
            'Укрепление иммунитета',
            'Диета и вес',
            'Фитнес и тренировки',
            'Психологическое равновесие',
            'Профилактика рака',
            'Заболевания суставов',
            'Здоровье кожи',
            'Здоровье волос',
            'Медицинские исследования',
            'Здоровье пожилых',
            'Операции и хирургия',
            'Витамины и минералы',
            'Рецепты для долголетия',
            'Здоровье глаз',
            'Заболевания печени',
            'Лечение аллергий',
            'Здоровье зубов',
            'Здоровье позвоночника',
        ];
    }

    public function run()
    {
        foreach ($this->tagsData as $tagName) {
            TagFactory::create(['title' => $tagName]); // Создаем теги на основе данных из массива
        }
    }

}
