<?php

/**
 * Create or open file at given path.
 * @param {string} path
 * @return {resource}
 */
function fopenp($path) {
    $dirname = dirname($path);
    if (!is_dir($dirname)) {
        mkdir($dirname, 0755, true);
    }
    return fopen($path, 'w') or die("Unable to open file $path!");
}
