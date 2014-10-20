<?php
class RestWiz_Controller_Abstract {

    /**
     * @var null|RestWiz_Controller_Abstract
     */
    private $controller = null;
    /**
     * @var null|FormatterInterface
     */
    private $formatter = null;


    private $output = null;

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
     * Set returned format. This format is being set in Bootstrap at initialization time.
     * @param $formatter FormatterInterface
     */
    public function setFormatter($formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * @param $output mixed
     */
    public function output($output)
    {
        $this->output = $output;
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

    /**
     * Get current formatter instance
     * @return FormatterInterface|null
     */
    public function getFormatter()
    {
        return $this->formatter;
    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }

    public function __toString()
    {
        return get_called_class();
    }


}