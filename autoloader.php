<?php
namespace OopStudy;

// Autoloader Class
class ClassAutoloader
{
    public function __construct()
    {
        // php built-in function for registering autoloading method
        // This will inject full class name to loader method below
        spl_autoload_register(array($this, 'loader'));
    }
    private function loader($className)
    {
        echo 'Trying to load ', $className, ' via ', __METHOD__, "()\n";
        // change class namespace to directory structure
        $filename = str_replace("\\", '/', $className) . '.php';
        if (file_exists($filename)) {
            include __DIR__ . '/' . $filename;
        } else {
            // remove namespace to look for file in root directory
            $filename = str_replace(__NAMESPACE__ . "\\", '', $className) . '.php';
            include __DIR__ . '/' . $filename;
        }

        if (class_exists($className)) {
            echo "found CLASS " . $className . "\n";
        } elseif (interface_exists($className)) {
            echo "found INTERFACE " . $className . "\n";
        } else {
            echo $className . ' cannot load for some reason' . "\n";
        }
        echo "\n";
    }
}

// set php include path to current root directory
set_include_path(__DIR__);

$autoloader = new ClassAutoloader();
