<?php
class RestWiz_Bootstrap_Bootstrap {

    public $controller = null;

    public function setController($controllerName)
    {
        if (!file_exists(APPLICATION_PATH . '/Controllers/' . $controllerName . 'Controller.php'))
        {
            throw new Exception($controllerName . 'Controller.php doesn\'t exist!');
        }

        require_once APPLICATION_PATH . '/Controllers/' . $controllerName . 'Controller.php';

        $this->controller = new $controllerName();
    }


}