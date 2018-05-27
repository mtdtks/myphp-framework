<?php
/**
 * Created by IntelliJ IDEA.
 * User: lbtmplz
 * Date: 2018/05/27
 * Time: 22:30
 */

class testClass
{

    public function register()
    {
        spl_autoload_register(array($this, 'LoadClass'));
    }

    public function loadClass($class)
    {
        foreach ($this->dirs as $dir) {
            $file = $dir . '/' . $class . '.php';
            if (is_readable($file)) {
                require  $file;

                return;
            }
        }
    }

}