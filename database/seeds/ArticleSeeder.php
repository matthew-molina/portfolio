<?php

use Illuminate\Database\Seeder;

use App\Helpers;

use App\Article;
use App\ArticleItem;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables();
        $this->populateArticles();
        $this->populateArticleItems();
    }

    private function truncateTables()
    {
    	DB::table('articles')->delete();
    	DB::table('article_items')->delete();
    }

    private function populateArticles()
    {
    	/* Iterate CSV */
        $this->command->info('Populating Articles');

        $row = 1;
        if (($handle = fopen('database/csv/articles.csv', "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

                $this->command->info('writing row ' .$row);

            	$data = Helpers::replaceArrayValue($data);

            	$model = new Article();
                $model->id = $data[0];

                $model->title = $data[1];
                
                $model->short_description = $data[2];
                $model->description = $data[3];

                $model->save();

                $row++;

            }
            fclose($handle);
        }
    }

    private function populateArticleItems()
    {
    	/* Iterate CSV */
        $this->command->info('Populating Article Items');

        $row = 1;
        if (($handle = fopen('database/csv/article_items.csv', "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

                $this->command->info('writing row ' .$row);

            	$data = Helpers::replaceArrayValue($data);

            	$model = new ArticleItem();
                $model->id = $data[0];
                $model->article_id = $data[1];

                $model->title = $data[2];
                $model->subtitle = $data[3];
                
                $model->description = $data[4];

                $model->save();

                $row++;

            }
            fclose($handle);
        }
    }
}
