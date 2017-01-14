<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag1 = new Tag();
        $tag1->name = '.NET';
        $tag1->save();
        $tag1->articles()->sync([1, 2]);

        $tag2 = new Tag();
        $tag2->name = '.NET community';
        $tag2->save();

        $tag3 = new Tag();
        $tag3->name = 'Laravel';
        $tag3->save();
        $tag3->articles()->sync([3, 4]);

        $tag4 = new Tag();
        $tag4->name = 'Laravel community';
        $tag4->save();

        $tag5 = new Tag();
        $tag5->name = 'Productivity';
        $tag5->save();
        $tag5->articles()->sync([5]);
    }
}
