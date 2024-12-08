#!/bin/bash

service mysql start

# Creer db si pas deja fait
mysql -e "CREATE DATABASE IF NOT EXISTS \`${SQL_DATABASE}\`;"

# Creer user SQL si pas deja fait
mysql -e "CREATE USER IF NOT EXISTS \`${SQL_USER}\`@'localhost' IDENTIFIED BY '${SQL_PASSWORD}';"

# Mettre user admin sur la db
mysql -e "GRANT ALL PRIVILEGES ON \`${SQL_DATABASE}\`.* TO \`${SQL_USER}\`@'%' IDENTIFIED BY '${SQL_PASSWORD}';"

# Modifier le mot de passe du user root
mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${SQL_ROOT_PASSWORD}';"

# Sauvegarder changements
mysql -e "FLUSH PRIVILEGES;"

# Redemarrer pour appliquer changements
mysqladmin -u root -p${SQL_ROOT_PASSWORD} shutdown
exec mysqld_safe
