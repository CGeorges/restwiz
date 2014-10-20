<?php
interface FormatterInterface
{
    /**
     * @return string
     */
    public function getFormattedOutput();

    /**
     * @param $content mixed
     */
    public function setRawContent($content);

    /**
     * @param $content string|int
     */
    public function prependContent($content);

    /**
     * @param $content string|int
     */
    public function appendContent($content);
}