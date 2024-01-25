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
                    'dashboards_crm_analytics' => [
                        'title' => 'CRM Analytics',
                        'route_name' => 'dashboards/crm-analytics'
                    ],
            
                ],
           
               
            ]
        ];
    }

    public static function all(){
        return [self::dashboards(), self::elements()];
    }
}
