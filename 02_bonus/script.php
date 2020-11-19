<?php
session_start();
$_SESSION['i'] = 0;
$_SESSION['path'] = [];
function repl($path, $argv, $wait)
{
    $oldMessage = $argv[2];
    $deletedFormat = $argv[3];
    $str=file_get_contents($path);
    $str=str_replace($oldMessage, $deletedFormat,$str);
    $fp = fopen( $path, "r+" );
    while(!(flock( $fp, LOCK_EX, $wait)));

    if (in_array($deletedFormat , explode("\"", $str)))
    {
    
        $flag = 0;
        foreach($_SESSION['path'] as $i => $value)
        {
            if($_SESSION['path'][$i] === $path)
                $flag = 1;
        }
        if(!$flag)
        {
            $_SESSION['path'][$_SESSION['i']] = $path;
            file_put_contents($path, $str);
            shell_exec('touch -r '.$path.' /Users/sael-you/Desktop/Piscine_PHP_1337/Day04/ex02/index.html');
            $_SESSION['i'] += 1;   
        }
    }   
    flock( $fp, LOCK_UN ); 
    fclose( $fp );
}

function rec($path, $argv)
{
//--- get all the directories
$dirname = $path;
$findme  = $argv[1];
$dirs    = glob($dirname.'*', GLOB_ONLYDIR);
$files   = array();
//--- search through each folder for the file
//--- append results to $files
foreach( $dirs as $d ) {
    $f = glob( $d .'/'. $findme );
    if( count( $f ) ) {
        $files = array_merge( $files, $f );
    }
    
}
if( count($files) ) {
    foreach( $files as $f ) {
           repl($f, $argv, $wait = true);
    }
}
if ($path == "/*/*/*/*/*")
    $path = "/*";
return rec($path = $path.'/*', $argv);
}
rec("/*", $argv);
echo "ok\n";
?>