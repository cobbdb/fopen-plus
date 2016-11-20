<?php

/**
 * Create or open file at given path.
 * @param {string} path
 * @return {resource}
 */
function fopenp($path, $options = 'w') {
    $dirname = dirname($path);
    if (!is_dir($dirname)) {
        mkdir($dirname, 0755, true);
    }
    return fopen($path, $options);
}
