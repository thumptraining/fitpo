<?php

namespace App\Main;


class SidebarPanel
{
    public static function elements()
    {
        return [
            'title' => 'Elements',
            'items' => [
                [
                    'elements_avatar' => [
                        'title' => 'Avatar',
                        'route_name' => '#'
                    ],
                    
                ]
            ]
        ];
    }

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

    public static function all(){
        return [self::dashboards(), self::elements()];
    }
}
