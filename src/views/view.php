<?php
/**
 * Base class for all views used in the Image Rater
 */
abstract class view
{
    /**
     * This method should be overriden to draw a web page to the browser
     */
    public abstract function render($data);
}
