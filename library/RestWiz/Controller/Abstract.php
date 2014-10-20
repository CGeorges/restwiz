<?php
class RestWiz_Controller_Abstract {

    /**
     * @var null|RestWiz_Controller_Abstract
     */
    private $controller = null;

    public function __construct()
    {

    }

    /**
     * Sets current controller instance inside controller so it can be accessed in requests.
     * @param $controller - Instance of current controller
     * @return bool
     */
    public function setController($controller)
    {
        $this->controller = $controller;

        if (!empty($this->controller))
        {
            return true;
        }

        return false;
    }

    /**
     * Return current controller instance.
     * For use of outside controller classes.
     * @return bool|RestWiz_Controller_Abstract
     */
    public function getController()
    {
        if (!empty($this->controller))
        {
            return $this->controller;
        }

        return false;
    }


}