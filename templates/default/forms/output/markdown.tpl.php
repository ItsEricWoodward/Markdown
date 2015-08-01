<?php

    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/external/vendor/autoload.php';
    
    $converter = new League\CommonMark\CommonMarkConverter();
    
    echo $this->parseHashtags($this->parseURLs($converter->convertToHtml($vars['value'])));

