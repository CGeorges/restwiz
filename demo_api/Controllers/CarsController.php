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
         * Totally optional, this shows you how you can manipulate the formatter before it gets outputed, if you
         * ever need it
         */
        $formatter = $this->getFormatter();
        $formatter->prependRawContent('HEADER<br />');
        $formatter->appendRawContent('<br />FOOTER');


        /*
         * Once the output is final, use method $this->output to send it to user.
         * The output will be formatted by the framework in the requested format JSON/XML/more to be added.
         */
        $this->output(array(1,2,3,4,5));
    }
}