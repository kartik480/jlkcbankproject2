@echo off
REM Sync public folder contents to htdocs for BigRock deployment
SET SRC=public
SET DST=htdocs

echo Syncing %SRC% to %DST%...

xcopy /E /Y "%SRC%\css" "%DST%\css\" >nul
xcopy /E /Y "%SRC%\images" "%DST%\images\" >nul
xcopy /E /Y "%SRC%\videos" "%DST%\videos\" >nul
copy /Y "%SRC%\index.php" "%DST%\index.php" >nul
copy /Y "%SRC%\.htaccess" "%DST%\.htaccess" >nul
copy /Y "%SRC%\favicon.ico" "%DST%\favicon.ico" >nul
copy /Y "%SRC%\robots.txt" "%DST%\robots.txt" >nul

echo Done. Upload contents of %DST% to public_html on BigRock.
