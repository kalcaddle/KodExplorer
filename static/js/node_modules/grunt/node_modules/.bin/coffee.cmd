@IF EXIST "%~dp0\node.exe" (
  "%~dp0\node.exe"  "%~dp0\..\coffee-script\bin\coffee" %*
) ELSE (
  node  "%~dp0\..\coffee-script\bin\coffee" %*
)