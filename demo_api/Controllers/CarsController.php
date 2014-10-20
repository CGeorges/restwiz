<?php
class Cars extends RestWiz_Controller_Abstract {

    public function getControllerResource()
    {
        /*
         * In a resource you should always return the output and not echo/print/var_dump/etc. This is because
         * the output will be formatted by the framework in the requested format JSON/XML/more to be added.
         */
        return $this->getController();
    }
}