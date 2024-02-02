<?php
add_theme_support('post-thumbnails');

function amazing_custom_excerpt($postContent){
    $stripped_content = strip_tags($postContent);

    // Trim the content to 200 characters
    $trimmed_content = mb_substr($stripped_content, 0, 300);

    return $trimmed_content.' ...';
}
