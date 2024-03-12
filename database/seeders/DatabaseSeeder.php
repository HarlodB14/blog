<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'

        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'

        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'

        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p> work Post</p>',
            'body' => '<p>Cras accumsan vel urna ac pulvinar. Suspendisse feugiat placerat viverra. Vivamus rutrum rhoncus rutrum. Praesent vehicula elit sem, a congue elit ullamcorper ac. Fusce in tincidunt dolor, eget auctor lectus. Aenean ullamcorper mi in justo maximus, eu pellentesque magna convallis. Nunc congue lectus id lacus aliquet, vitae sollicitudin ex auctor. Aenean non lacus vitae sem consectetur hendrerit. Pellentesque quis enim accumsan</p>',

        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p> work Post</p>',
            'body' => '<p>Cras accumsan vel urna ac pulvinar. Suspendisse feugiat placerat viverra. Vivamus rutrum rhoncus rutrum. Praesent vehicula elit sem, a congue elit ullamcorper ac. Fusce in tincidunt dolor, eget auctor lectus. Aenean ullamcorper mi in justo maximus, eu pellentesque magna convallis. Nunc congue lectus id lacus aliquet, vitae sollicitudin ex auctor. Aenean non lacus vitae sem consectetur hendrerit. Pellentesque quis enim accumsan</p>',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p> work Post</p>',
            'body' => '<p>Cras accumsan vel urna ac pulvinar. Suspendisse feugiat placerat viverra. Vivamus rutrum rhoncus rutrum. Praesent vehicula elit sem, a congue elit ullamcorper ac. Fusce in tincidunt dolor, eget auctor lectus. Aenean ullamcorper mi in justo maximus, eu pellentesque magna convallis. Nunc congue lectus id lacus aliquet, vitae sollicitudin ex auctor. Aenean non lacus vitae sem consectetur hendrerit. Pellentesque quis enim accumsan</p>',
        ]);
    }
}
