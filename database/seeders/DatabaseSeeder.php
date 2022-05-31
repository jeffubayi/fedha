<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        $list = Listing::factory(5)->create([
            'user_id' => $user->id
        ]);

//         Listing::factory(6)->create([
//             'user_id' => $user->id
//         ]);

//         Listing::create([
//             'title' => "jeff ubayi",
//             'tags' => 'student, lowerGrade, bottom',
//             'company' => "Blue",
//             'email' => "jeff@gmail.com",
//             'website' => "bazenga.com",
//             'location' => "Kisumu",
//             'description' => "Handsome boy",
//     ]);
//         Listing::create([
//             'title' => "rose makena",
//         'tags' => 'student, lowerGrade, top',
//         'company' => "Red",
//         'email' => "rose@gmail.com",
//         'website' => "chic.com",
//         'location' => "Meru",
//         'description' => "Creative muse",
//     ]);

//     Listing::create([
//         'title' => "Tom sawyer",
//         'tags' => 'student, upperGrade, bottom',
//         'company' => "Red",
//         'email' => "Tom@gmail.com",
//         'website' => "Tom.com",
//         'location' => "New york",
//         'description' => "Did you see Tom",
// ]);
// Listing::create([
//     'title' => "Rihana roman",
//     'tags' => 'student, upperGrade, top',
//     'company' => "Blue",
//     'email' => "riri@gmail.com",
//     'website' => "riri.com",
//     'location' => "Calif",
//     'description' => "Cool girl",
// ]);


// Listing::create([
//     'title' => "Mr Abdul",
//     'tags' => 'teacher, dark, handsome',
//     'company' => "bazenga digital",
//     'email' => "jeff@gmail.com",
//     'website' => "bazenga.com",
//     'location' => "Kisumu",
//     'description' => "Handsome boy",
// ]);
// Listing::create([
//     'title' => "Mr Nyongesa",
// 'tags' => 'teacher, light, beautiful',
// 'company' => "chic kloset",
// 'email' => "rose@gmail.com",
// 'website' => "chic.com",
// 'location' => "Meru",
// 'description' => "Creative muse",
// ]);

// Listing::create([
// 'title' => "Mr Abok",
// 'tags' => 'teacher, green, mischevioes',
// 'company' => "bazenga digital",
// 'email' => "Tom@gmail.com",
// 'website' => "Tom.com",
// 'location' => "New york",
// 'description' => "Did you see Tom",
// ]);
// Listing::create([
// 'title' => "Mrs Jane",
// 'tags' => 'teacher, singer, girl',
// 'company' => "bazenga digital",
// 'email' => "riri@gmail.com",
// 'website' => "riri.com",
// 'location' => "Calif",
// 'description' => "Cool girl",
// ]);
    }
}
