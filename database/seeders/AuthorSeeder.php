<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'author_name' => 'Naguib Mahfouz',
            'nationality' => 'Egyptian',
            'birth_date' => '1911-12-11'
            ]);

        Author::create([
            'author_name' => 'Mahmoud Darwish',
            'nationality' => 'Palestinian',
            'birth_date' => '1941-03-13'
            ]);

        Author::create([
            'author_name' => 'Gassan Kanafani',
            'nationality' => 'Syrian',
            'birth_date' => '1936-04-09'
            ]);

        Author::create([
            'author_name' => 'William Shakespeare',
            'nationality' => 'English',
            'birth_date' => '1564-04-23'
            ]);

        Author::create([
            'author_name' => 'Jane Austen',
            'nationality' => 'English',
            'birth_date' => '1775-12-16'
            ]);


    }

}

