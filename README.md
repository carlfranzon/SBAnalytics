SBAnalytics
===========

Google Analytics panel for Panic's iPad app "Status Board"

This is based on the G-api library, so you can use and change any of the dimensions or metrics as you please (just be consistent and change throughout the file.)

Usage:

Edit file to use your own credentials.

Upload to webserver.

In Status Board:

Create new Graph panel and enter your URL to the file. Note that the url uses parameters, and without them it won't work.

URL Format:
.../SBAnalytics.php?profile=XXXXXX&title=XXXXXXXX

Parameters:

The profile parameter should be the GA profile you want stats for. The best way to find your profile id is to go to GA and open the profile in Report mode. Check the url and find the numbers after the "p".

The profile title is the name of your site.

Example:

http://www.carlfranzon.com/wp-content/uploads/IMG_0408.png
