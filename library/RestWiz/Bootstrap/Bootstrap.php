<?php
class RestWiz_Bootstrap_Bootstrap {

    /**
     * Action controller
     * @var null|RestWiz_Controller_Abstract
     */
    public $controller = null;

    /**
     * Sets action controller. This is done automatically in Bootstrap.
     * @param $controller_name string
     * @throws Exception
     */
    public function setController($controller_name)
    {
        if (!file_exists(APPLICATION_PATH . '/Controllers/' . $controller_name . 'Controller.php'))
        {
            throw new Exception($controller_name . 'Controller.php doesn\'t exist!');
        }

        require_once LIBRARY_PATH . '/Controller/Abstract.php';
        require_once APPLICATION_PATH . '/Controllers/' . ucfirst($controller_name) . 'Controller.php';

        $this->controller = new $controller_name();
        $this->controller->setController($this->controller);
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

    /**
     * Executes resource inside controller and outputs formatted data
     * @param $resource string
     * @throws Exception
     */
    public function executeResource($resource)
    {
        $resource_name = $resource . 'Resource';
        if (!method_exists($this->controller, $resource_name ))
        {
            throw new Exception('Resource ' . $resource_name . ' doesn\'t exists in current controller');
        }


        $raw_output = $this->controller->$resource_name();

        //Require formatter interface
        require_once LIBRARY_PATH . '/Formatter/Interface.php';

        if (empty($_GET['format']))
        {
            $formatter_name = 'RestWiz_Formatter_' . DEFAULT_OUTPUT_FORMAT;
            require_once LIBRARY_PATH . '/Formatter/' . DEFAULT_OUTPUT_FORMAT . '.php';
        } else {
            $formatter_name = 'RestWiz_Formatter_' . $_GET['format'];
            require_once LIBRARY_PATH . '/Formatter/' . $_GET['format'] . '.php';
        }


        $formatter = new $formatter_name($raw_output);
        echo $formatter->getFormattedOutput();


    }

}