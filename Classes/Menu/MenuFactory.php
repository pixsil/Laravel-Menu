<?php

// verion 1

Namespace App\Classes\Menu;

/**
 * Menu factory
 */
class MenuFactory {

    private $active_menu = null;

    // // the object is created from within the class itself
    // // only if the class has no instance.
    // public static function getInstance()
    // {
    //     // if already there
    //     if (self::$instance == null) {
    //         self::$instance = new MenuFactory();
    //     }

    //     return self::$instance;
    // }

    //
    public function setActive($active_menu)
    {
        // set active menu
        $this->active_menu = $active_menu;

        // void
        return;
    }

    //
    public function getActive()
    {
        return $this->active_menu ?? null;
    }

    //
    public function renderActive($menu)
    {
        // init
        $class = '';

        // set active menu
        if ($this->active_menu === $menu) {
            $class = 'active';
        }

        return $class;
    }
}
