<?php
spl_autoload_register(null, false);

spl_autoload_extensions('.php');

/**
 * Auto include of requested classes
 *
 * @param $className
 */
function classLoader($className)
{
    //$codePull[] = implode(DIRECTORY_SEPARATOR, array('app', 'code', 'local')) . DS;
    //$codePull[] = implode(DIRECTORY_SEPARATOR, array('app', 'code', 'core')) . DS;
    //$codePull[] = 'lib' . DIRECTORY_SEPARATOR;
    $classPath = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    //echo '</br>Try to include: ' . $classPath;
    $filePath = $classPath;
    if (file_exists($filePath)) {
        //echo '</br>Included: ' . $filePath;
        include_once $filePath;
    }

}

spl_autoload_register('classLoader');