<?php
class Formatter_Abstract implements FormatterInterface {

    private $content = null;
    private $header = null;
    private $footer = null;

    public function getFormattedOutput()
    {
        return $this->header . $this->content . $this->footer;
    }

    public function getRawOutput()
    {
        return $this->content;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function getFooter()
    {
        return $this->footer;
    }

    public function setRawContent($content)
    {
        if (empty($content))
        {
            return false;
        }
        $this->content = $content;
    }

    public function prependRawContent($content)
    {
        $this->header = $content;
    }

    public function appendRawContent($content)
    {
        $this->footer = $content;
    }
}