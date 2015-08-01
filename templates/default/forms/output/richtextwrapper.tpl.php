<?php

    // First: should we use markdown at all?

    $markdown = false;
    if (!empty($vars['object']->_id)) {
        $markdown = !(empty($vars['object']->markdown_editor) && empty($vars['object']->markdown_format));
    }

    if ($markdown) {
        echo $this->draw('forms/output/markdown');
    } else {
        echo $this->draw('forms/output/richtext',true,false);
    }
