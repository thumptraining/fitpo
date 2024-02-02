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

                    'tags.index' => [
                        'title' => 'Manage tags',
                        'route_name' => 'tags.index'
                    ],

                ],
       
            ]
        ];
    }

    public static function all(){
        return [self::dashboards(), self::posts(),];
    }

    public static function user_posts()
    {
        return [
            'title' => 'Blog',
            'items' => [
                [
                    'content' => [
                        'title' => 'Education',
                        'route_name' => 'user_posts'
                    ],
            
                ],
           
               
            ]
        ];
    }

    public static function user_recipes()
    {
        return [
            'title' => 'Recipes',
            'items' => [
                [
                    'content' => [
                        'title' => 'Healthy recipes',
                        'route_name' => 'user_recipes'
                    ],
            
                ],
           
               
            ]
        ];
    }

}
