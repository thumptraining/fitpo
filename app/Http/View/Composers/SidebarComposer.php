<?php

namespace App\Http\View\Composers;

use App\Main\SidebarPanel;
use Illuminate\View\View;

class SidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        if (!is_null(request()->route())) {
            $pageName = request()->route()->getName();
            $routePrefix = explode('/', $pageName)[0] ?? '';

            switch ($routePrefix) {
                case 'posts.index':
                    $view->with('sidebarMenu', SidebarPanel::posts());
                    break;

                case 'categories.index':
                    $view->with('sidebarMenu', SidebarPanel::posts());
                    break;

                case 'tags.index':
                    $view->with('sidebarMenu', SidebarPanel::posts());
                    break;

                case 'user_posts':
                    $view->with('sidebarMenu', SidebarPanel::user_posts());
                    break;

                case 'user_recipes':
                    $view->with('sidebarMenu', SidebarPanel::user_recipes());
                    break;

                
                case 'dashboards':
                    $view->with('sidebarMenu', SidebarPanel::dashboards());
                    break;
                    
                default:
                $view->with('sidebarMenu', SidebarPanel::dashboards());
            }
            
            $view->with('allSidebarItems', SidebarPanel::all());
            $view->with('pageName', $pageName);
            $view->with('routePrefix', $routePrefix);
        }
    }
}
