@IF EXIST "%~dp0\node.exe" (
  "%~dp0\node.exe"  "%~dp0\..\js-yaml\bin\js-yaml.js" %*
) ELSE (
  node  "%~dp0\..\js-yaml\bin\js-yaml.js" %*
)