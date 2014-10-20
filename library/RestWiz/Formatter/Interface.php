<?php
interface FormatterInterface
{
    /**
     * @param $content string|array|int
     */
    public function __construct($content);

    /**
     * @return string
     */
    public function getFormattedOutput();
}