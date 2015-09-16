Your Gimp must have Python scripting support. To check: towards the bottom of
the "Filters" menu, there ust be a "Python-fu" item next to the "Script-fu" one. 
There is at least one gimp-win installer that installs Python support.

How my script works:

1) input is assumed to be all *.jpg in a directory

2) output files go in a 'processed' subdirectory of that directory, with the
same name as original:

	/some/path/images/my_image.jpg 
is transformed into:
	/some/path/images/processed/my_image.jpg

So to run the scripts:

- put all the files to process in the same directory

- create a subdirectory 'processed' in that directory

- edit tgb.bat and replace './images' by the directory

- run tgb.bat (on my decent laptop, takes a bit under 2 seconds to process 5
copies of your images)

I run Linux, so tgb.bat is a bit of a shot in the dark. If you have startup
problems, call back.