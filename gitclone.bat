@ECHO off
REM -d-c=C:\wamp\bin\php\php5.4.3\php.ini

SET url=%1

CD C:\inetpub\wwwroot\repos
SET url=%url:~26%
SET newDir=C:\inetpub\wwwroot\repos\%url:~19%
REM ECHO "%newDir%"

php.exe C:\inetpub\wwwroot\repos\GitHubClone\gitclone.php %1
REM C:\sdk\Git\cmd\git.EXE clone -v --recurse-submodules "%url%" "%newDir%"
REM PAUSE

REM CHOICE /C YN /M "Open cloned repository?"

REM IF ERRORLEVEL 1  SET DRIVE=drive A:
REM IF ERRORLEVEL 1  START " "%newDir%



REM Changes the Cmd.exe prompt. Used without parameters, prompt resets the command prompt to the default setting, the current drive letter followed by the current directory and a greater-than symbol (>).
REM [text] - Specifies any text and information you want included in your system prompt.

REM echo %1:~26%
 
