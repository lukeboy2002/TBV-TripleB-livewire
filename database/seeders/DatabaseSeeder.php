<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Sponsor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesAndPermissionsSeeder::class);
//        $this->call(AdminSeeder::class);

//        $users = User::factory(10)->create();
        $admin = User::create([
            'username' => 'admin',
            'email' => 'admin@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('adminadmin'),
            'remember_token' => Str::random(10),
        ]);

        // Generate and save profile photo
        $username = get_initials($admin->username);
        $id = $admin->id . '.png';
        $path = '/profile-photos/';
        $imagePath = create_avatar($username, $id, $path);
        $admin->profile_photo_path = $imagePath;
        $admin->save();

        // Assign admin role
        $admin->assignRole('admin');

        // Seed users with factory
        $users = User::factory(10)->create();

        $posts = Post::factory(200)->recycle($users)->create();

        $comments = Comment::factory(100)->recycle($users)->recycle($posts)->create();

        $sponsors = Sponsor::factory(10)->create();
    }
}
