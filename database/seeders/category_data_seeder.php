<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;

class category_data_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          
          ['id' => 1,'tittle' => 'Electronic','parent_id'=>NULL,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          
          ['id' => 2,'tittle' => 'mobile','parent_id'=>1,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          
          ['id' => 3,'tittle' => 'LED','parent_id'=>1,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          
          ['id' => 4,'tittle' => 'Android','parent_id'=>2,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          
          ['id' => 5,'tittle' => 'Apple','parent_id'=>2,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 6,'tittle' => 'Samsung','parent_id'=>4,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],

          ['id' => 7,'tittle' => 'Oppo','parent_id'=>4,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],

          ['id' => 8,'tittle' => 'Vivo','parent_id'=>4,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],

          ['id' => 9,'tittle' => 'I-phone-12','parent_id'=>5,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 10,'tittle' => 'I-phone-13-promax','parent_id'=>5,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],

          ['id' => 11,'tittle' => 'I-phone-X','parent_id'=>5,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],

          ['id' => 12,'tittle' => 'Saloon-service','parent_id'=>NULL,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],

          ['id' => 13,'tittle' => 'web-developer','parent_id'=>NULL,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],


          ['id' => 14,'tittle' => 'Backend_developer','parent_id'=>13,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 15,'tittle' => 'Frontend_developer','parent_id'=>13,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],

          ['id' => 16,'tittle' => 'Php developer','parent_id'=>14,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 17,'tittle' => 'framework Php','parent_id'=>16,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 18,'tittle' => 'CMS Php','parent_id'=>16,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 19,'tittle' => 'Cake-php developer','parent_id'=>17,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 20,'tittle' => 'Laravel developer','parent_id'=>17,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 21,'tittle' => 'Wordpress developer','parent_id'=>18,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],

          ['id' => 22,'tittle' => 'Angular develeper','parent_id'=>15,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 23,'tittle' => 'Angular_js develeper','parent_id'=>15,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 24,'tittle' => 'React develeper','parent_id'=>15,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 25,'tittle' => 'React-web develeper','parent_id'=>24,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 26,'tittle' => 'React-native develeper','parent_id'=>24,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 27,'tittle' => 'Codelniter developer','parent_id'=>17,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 28,'tittle' => 'drupal developer','parent_id'=>18,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 29,'tittle' => 'opencart developer','parent_id'=>18,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 30,'tittle' => 'joomla developer','parent_id'=>18,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],
          ['id' => 31,'tittle' => 'Html,css,javascript','parent_id'=>15,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')],

       ];

       \App\Models\category::insert($data);
    }
}
