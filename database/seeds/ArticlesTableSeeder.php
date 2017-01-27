<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article1 = new Article();
        $article1->title = 'Article 1';
        $article1->content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of 
            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
            versions of Lorem Ipsum.';
        $article1->user_id = 1;
        $article1->save();
        $article1->tags()->sync([1, 2]);

        $article2 = new Article();
        $article2->title = 'Article 2';
        $article2->content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of 
            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
            versions of Lorem Ipsum.';
        $article2->user_id = 1;
        $article2->save();
        $article2->tags()->sync([3, 4]);

        $article3 = new Article();
        $article3->title = 'Article 3';
        $article3->content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of 
            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
            versions of Lorem Ipsum.';
        $article3->user_id = 1;
        $article3->save();
        $article3->tags()->sync([5]);

        $article4 = new Article();
        $article4->title = 'Article 4';
        $article4->content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of 
            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
            versions of Lorem Ipsum.';
        $article4->user_id = 3;
        $article4->save();
        $article4->tags()->sync([1, 5]);

        $article5 = new Article();
        $article5->title = 'Article 5';
        $article5->content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of 
            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
            versions of Lorem Ipsum.';
        $article5->user_id = 2;
        $article5->save();
        $article5->tags()->sync([1, 2]);

        $article6 = new Article();
        $article6->title = 'Article 6';
        $article6->content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of 
            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
            versions of Lorem Ipsum.';
        $article6->user_id = 2;
        $article6->save();

        $article7 = new Article();
        $article7->title = 'Article 7';
        $article7->content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of 
            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
            versions of Lorem Ipsum.';
        $article7->user_id = 3;
        $article7->save();
        $article7->tags()->sync([1, 2, 5]);
    }
}
