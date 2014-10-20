<?php
class RestWiz_Bootstrap_Bootstrap {

    /**
     * Action controller
     * @var null|RestWiz_Controller_Abstract
     */
    public $controller = null;

    /**
     * Sets action controller. This is done automatically in Bootstrap.
     * @param $controllerName
     * @throws Exception
     */
    public function setController($controllerName)
    {
        if (!file_exists(APPLICATION_PATH . '/Controllers/' . $controllerName . 'Controller.php'))
        {
            throw new Exception($controllerName . 'Controller.php doesn\'t exist!');
        }

        require_once APPLICATION_PATH . '/Controllers/' . $controllerName . 'Controller.php';

        $this->controller = new $controllerName();
    }

    /**
     * Returns current action controller or false if no controller is set
     * @return false|RestWiz_Controller_Abstract
     */
    public function getController()
    {
        if (!empty($this->controller))
            return $this->controller;

        return false;
    }

}