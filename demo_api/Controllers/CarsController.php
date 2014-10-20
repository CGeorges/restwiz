<?php
/*
 * A RestWiz controller should always extend the abstract controller RestWiz_Controller_Abstract
 */
class Cars extends RestWiz_Controller_Abstract {

    /*
     * Resources should always be public and end with "Resource"
     */
    public function getControllerNameResource()
    {
        /*
         * In a resource you should always return the output and not echo/print/var_dump/etc. This is because
         * the output will be formatted by the framework in the requested format JSON/XML/more to be added.
         */
        return array(1,2,3,4,5);
    }
}