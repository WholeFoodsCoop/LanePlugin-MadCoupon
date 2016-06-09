<?php
ini_set('error_reporting', E_ALL);

/* mock COREPOS API classes for testing */

if (!class_exists('Plugin', false)) {
    class Plugin 
    {
        public function pluginUrl()
        {
            return '';
        }
    }
}

if (!class_exists('Parser', false)) {
    class Parser
    {
        public function default_json() { return array(); }
    }
}

include(__DIR__ . '/self.php');

