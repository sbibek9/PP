*install apache2
*install mysql


##### SETTING UP MySql password ######
	run "mysql_secure_installation"

######################################


if php is unable to insert data into mysql
install packages
- sudo apt install libapache2-mod-php php-mysql
login to mysql
	- sudo mysql -u root -p (Enter password)
	- run "use mysql" inside mysql
	- run "SELECT User,authentication_string,plugin,host FROM user;"
	- ( check if plugin for root is auth_socket )
	- run "UPDATE user SET plgin='mysql_native_password' WHERE User='root';"
	- run "FLUSH PRIVILEGES;"
	- quit
