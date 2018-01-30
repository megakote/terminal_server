<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 18:50:52',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 19:30:37',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 18:50:52',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 19:30:37',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Pages',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 19:30:37',
                'route' => 'voyager.pages.index',
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 18:50:52',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 13,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 20:36:50',
                'route' => NULL,
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 1,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 18:56:07',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 2,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 18:56:07',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 3,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 18:56:07',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 14,
                'created_at' => '2018-01-21 18:50:52',
                'updated_at' => '2018-01-21 20:36:50',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Products',
                'url' => '/admin/products/',
                'target' => '_self',
                'icon_class' => 'voyager-diamond',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2018-01-21 18:53:19',
                'updated_at' => '2018-01-21 19:30:37',
                'route' => NULL,
                'parameters' => '',
            ),
            12 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Clients',
                'url' => '/admin/clients',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2018-01-21 19:06:49',
                'updated_at' => '2018-01-21 19:23:54',
                'route' => NULL,
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Events',
                'url' => '/admin/events',
                'target' => '_self',
                'icon_class' => 'voyager-eye',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2018-01-21 19:08:45',
                'updated_at' => '2018-01-21 19:30:37',
                'route' => NULL,
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Orders',
                'url' => '/admin/orders',
                'target' => '_self',
                'icon_class' => 'voyager-basket',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2018-01-21 19:22:28',
                'updated_at' => '2018-01-21 19:30:37',
                'route' => NULL,
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Terminals',
                'url' => '/admin/terminals',
                'target' => '_self',
                'icon_class' => 'voyager-shop',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2018-01-21 19:29:27',
                'updated_at' => '2018-01-21 19:30:42',
                'route' => NULL,
                'parameters' => '',
            ),
            16 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Histories',
                'url' => '/admin/histories',
                'target' => '_self',
                'icon_class' => 'voyager-logbook',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 12,
                'created_at' => '2018-01-21 20:28:16',
                'updated_at' => '2018-01-21 20:36:50',
                'route' => NULL,
                'parameters' => NULL,
            ),
            17 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Order Products',
                'url' => '/admin/order-products',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 15,
                'created_at' => '2018-01-22 00:31:59',
                'updated_at' => '2018-01-22 00:31:59',
                'route' => NULL,
                'parameters' => NULL,
            ),
        ));
        
        
    }
}