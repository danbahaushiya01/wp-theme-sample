<?php
add_theme_support('post-thumbnails');

function amazing_say_hello($name = 'Dear'){
    return "Hello ".$name;
}