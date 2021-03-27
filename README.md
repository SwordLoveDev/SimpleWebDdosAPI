# SimpleWebDdosAPI
 Simple web API in php which takes as a parameter with GET requests to launch attacks with scripts present on the machine. There is also a small key system that allows you to use the API.

# Requirements
- You need to install apache and php on your server or machine, to install it type : `apt-get install apache2 -y && systemctl start apache2.service && apt-get install php -y`
- You need to place `api.php` on `/var/www/html/`.
- And change the code for the emplacement of your ddos script.

# How used it
- Lanch a attack with parameter on GET requests : `http://yourwebsite.com/api.php?key=[key]&host=[host]&port=[port]&time=10&method=[method]`
- Exemple : `http://yourwebsite.com/api.php?key=mdp&host=192.168.1.46&port=1337&time=1337&method=UDP`

I clearly specify that I am in no way responsible for your actions and that I offer this tool developed by me for educational purposes only.

<img src="https://cdn.discordapp.com/attachments/351798326129197057/825451608564301854/unknown.png" alt="" />
