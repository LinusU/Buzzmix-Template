<?php

if(!isset($parts[1])) {
    return 404;
}

header("Cache-Control: no-cache, must-revalidate");

$srcd = dirname(__FILE__) . '/../src';

switch($parts[1]) {
    case 'css':
        
        $smarty->contentType('css');
        
        $dir = new DirectoryIterator("$srcd/css/");
        
        foreach($dir as $file) {
            if(substr($file->getFilename(), -4) == ".css") {
                
                $f = fopen($file->getPathname(), "r");
                
                while($line = fgets($f)) {
                    echo preg_replace('/url\(([^\(\)]+)\)/', 'url(http://cdn.' . $_SERVER['HTTP_HOST'] . '$1)', $line);
                }
                
                fclose($f);
                
            }
        }
        
        break;
    case 'js':
        
        $smarty->contentType('javascript');
        
        //readfile("$srcd/js/somefile.js");
        
        break;
    default: return 404;
}

return 200;
