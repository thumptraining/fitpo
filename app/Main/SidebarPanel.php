<?php

namespace App\Main;


class SidebarPanel
{

    public static function dashboards()
    {
        return [
            'title' => 'Dashboards',
            'items' => [
                [
                    'dashboards' => [
                        'title' => 'Dashboard',
                        'route_name' => 'dashboard'
                    ],
            
                ],
           
               
            ]
        ];
    }

    public static function posts()
    {
        return [
            'title' => 'Content',
            'items' => [
                [
                    'posts.index' => [
                        'title' => 'Manage Blog',
                        'route_name' => 'posts.index'
                    ],

                    'categories.index' => [
                        'title' => 'Manage category',
                        'route_name' => 'categories.index'
                    ],

                ],
       
            ]
        ];
    }

    public static function all(){
        return [self::dashboards(), self::posts(),];
    }
}
