<?php


if(substr($argv[1],0,strlen('github-windows://openRepo/')) == 'github-windows://openRepo/') {
	$repo = substr($argv[1],strlen('github-windows://openRepo/')).'.git';

}

if(substr($argv[1],0,strlen('sourcetree://cloneRepo/')) == 'sourcetree://cloneRepo/') {
	$repo = 'https://'.substr($argv[1],strlen('sourcetree://cloneRepo/ssh://git@'));
//git clone https://bitbucket.org/jimmyD/open-hardware-monitor-applet.git
}
echo $repo;

//echo '"C:\Program Files (x86)\SmartGit\bin\smartgitc.exe" "'.$repo.'"';
/*
while(0!=1) {
    sleep(100000000);
}*/


print_r($argv);
$baseDir = 'C:/inetpub/wwwroot/repos';

$dir = substr($argv[1],45);
$dir = str_replace('\/', '\\', $dir);
//github-windows://openRepo/https://github.com/ohec/assignmentinfo

//print_r($dir);
//$repoName = substr($repo,strrpos($repo, '/')+1).'.git';

//die($repoName);
//die($dir);

if (file_exists($dir)) {
    rmdir($dir);
} else {
	mkdir($dir);
    //echo "The file $filename does not exist";
}



chdir($baseDir);

//$last_line = system('CHOICE /C YN /M "Open cloned repository?"', $retval);
//$v = shell_exec('CHOICE /C YN /M "Open cloned repository?"');
//print_r($retval);die();
exec('"C:\Program Files\Git\bin\git.exe" clone -v --recurse-submodules "'.$repo.'" "'.$baseDir.'/'.$dir.'"');
//exec('"C:\Program Files (x86)\SmartGit\bin\smartgitc.exe" "'.$repo.'"');


echo "Open cloned repository?";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
//if(strtolower(trim($line)) == 'y'){
    exec('start "" "'.$baseDir.'/'.$dir.'"');
//}
if($retval == 1) {

}

function execInBackground($cmd) {

	pclose(popen("start /B ". $cmd, "r"));
   /* if (substr(php_uname(), 0, 7) == "Windows"){
        pclose(popen("start /B ". $cmd, "r"));
    }
    else {
        exec($cmd . " > /dev/null &");
    } */
}
/*$filename = '/path/to/foo.txt';

if (file_exists($filename)) {
    rmdir($filename);
} else {
    echo "The file $filename does not exist";
}*/
