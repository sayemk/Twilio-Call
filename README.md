# Twilio-Call
Twilio Call management with user groups and voice file

#Installation 
do git clone or download twilio-call.
and run **composer install or update**


##Database setup
1. Run the sql script **colgtshirtfoundation.sql** in your database server
2. Set your database preferences in **application/config/database.php**. Make sure you set database prefix **colgtshirt**.
##Twilio setup
Change the config in **application/config/twilio.php** with your own credentials.

##Directory
1. Create **uploads** directory in your in home folder and create three sub-folder **contact, voice, xml** in it.
2. And make those writable by web server

##Basic Usage
1. Create a group from front end.
2. Create contact or upload with from a excel file. Only **.xls** file is readable and cells headings are ***name, email, phone*** i.e. 

Name	      |Email	        |Phone
		
Abu Sayem     |sa@gmail.com	|8801718888888

Shahnaj	      |sh@gmail.com	|8801751455555

3. Then make call





