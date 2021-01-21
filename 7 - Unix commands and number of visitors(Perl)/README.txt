Setting up apache2 to run perl script

1. go to "/etc/apache2/sites-available" and paste the following line in between "DocumentRoot /var/www/html" and "ErrorLog ${APACHE_LOG_DIR}/error.log"

<Directory "/var/www/html">
    AllowOverride None
    Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
    AddHandler cgi-script .pl
    Order allow,deny
    Allow from all
</Directory>

2. run "a2emod cgi"
3. restart apache2 "sudo systemctl restart apache2"