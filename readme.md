<!-- 
If URL redirection is not working then add the given line in "apache2.conf" file
PATH - /etc/apache2/ (Ubuntu)

<Directory /var/www/html>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory> 
-->