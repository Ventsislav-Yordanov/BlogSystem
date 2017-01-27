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

        $tag2 = new Tag();
        $tag2->name = '.NET community';
        $tag2->save();

        $tag3 = new Tag();
        $tag3->name = 'Laravel';
        $tag3->save();

        $tag4 = new Tag();
        $tag4->name = 'Laravel community';
        $tag4->save();

        $tag5 = new Tag();
        $tag5->name = 'Productivity';
        $tag5->save();

        $tag6 = new Tag();
        $tag6->name = 'Music';
        $tag6->save();

        $tag7 = new Tag();
        $tag7->name = 'Lifestyle';
        $tag7->save();

        $tag8 = new Tag();
        $tag8->name = 'programming';
        $tag8->save();

        $tag9 = new Tag();
        $tag9->name = 'Apple';
        $tag9->save();

        $tag10 = new Tag();
        $tag10->name = 'Microsoft';
        $tag10->save();

        $tag11 = new Tag();
        $tag11->name = 'Laptop';
        $tag11->save();
    }
}
