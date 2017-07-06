<?php
namespace Sociomantic;

use Sociomantic;

class appFactory {

    public function __construct() {
        // ... //
    }

    public static function make ($className = '') {
        if ($className == '') {
            return new Kernel();
        }
            // Assuming Class files are already loaded using autoload concept
            if(class_exists($className)) {
                return new $className();
            } else {
                throw new Exception('Invalid class request');
            }
    }
}
