<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 18:50:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 18:50:52',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 18:50:52',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-22 19:20:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 18:50:52',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 18:50:52',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'products',
                'slug' => 'products',
                'display_name_singular' => 'Product',
                'display_name_plural' => 'Products',
                'icon' => 'voyager-diamond',
                'model_name' => 'App\\Product',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'created_at' => '2018-01-21 19:00:47',
                'updated_at' => '2018-01-22 19:21:25',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'clients',
                'slug' => 'clients',
                'display_name_singular' => 'Client',
                'display_name_plural' => 'Clients',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Client',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-21 19:06:49',
                'updated_at' => '2018-01-21 19:06:49',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'events',
                'slug' => 'events',
                'display_name_singular' => 'Event',
                'display_name_plural' => 'Events',
                'icon' => 'voyager-eye',
                'model_name' => 'App\\Event',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-21 19:08:44',
                'updated_at' => '2018-01-21 19:08:44',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'orders',
                'slug' => 'orders',
                'display_name_singular' => 'Order',
                'display_name_plural' => 'Orders',
                'icon' => 'voyager-basket',
                'model_name' => 'App\\Order',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-21 19:22:27',
                'updated_at' => '2018-01-21 19:22:27',
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'terminals',
                'slug' => 'terminals',
                'display_name_singular' => 'Terminal',
                'display_name_plural' => 'Terminals',
                'icon' => 'voyager-shop',
                'model_name' => 'App\\Terminal',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-21 19:29:26',
                'updated_at' => '2018-01-21 19:30:09',
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'histories',
                'slug' => 'histories',
                'display_name_singular' => 'History',
                'display_name_plural' => 'Histories',
                'icon' => 'voyager-logbook',
                'model_name' => 'App\\History',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-21 20:28:16',
                'updated_at' => '2018-01-21 20:28:16',
            ),
            12 => 
            array (
                'id' => 15,
                'name' => 'order_products',
                'slug' => 'order-products',
                'display_name_singular' => 'Order Product',
                'display_name_plural' => 'Order Products',
                'icon' => NULL,
                'model_name' => 'App\\OrderProducts',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-22 00:31:58',
                'updated_at' => '2018-01-22 00:31:58',
            ),
        ));
        
        
    }
}