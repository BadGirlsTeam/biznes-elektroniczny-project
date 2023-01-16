#!/bin/bash

DATABASE_NAME="be_183043"
DATABASE_USER="be_183043"
DATABASE_PASSWORD="prestashop"
DATABASE_ROOT_PASSWORD="prestashop"
DATABASE_ROOT_LOGIN="root" 

# docker exec -it deploy-mysql-1 mysql -uroot -pstudent -e "SHOW DATABASES;"


docker exec -it deploy-mysql-1 mysql -u$DATABASE_ROOT_LOGIN -p$DATABASE_ROOT_PASSWORD -e "CREATE DATABASE IF NOT EXISTS ${DATABASE_NAME};"
docker exec -it deploy-mysql-1 mysql -u$DATABASE_ROOT_LOGIN -p$DATABASE_ROOT_PASSWORD -e "CREATE USER IF NOT EXISTS ${DATABASE_USER}@'%' IDENTIFIED BY '${DATABASE_PASSWORD}';"
docker exec -it deploy-mysql-1 mysql -u$DATABASE_ROOT_LOGIN -p$DATABASE_ROOT_PASSWORD -e "GRANT ALL PRIVILEGES ON ${DATABASE_NAME}.* TO '${DATABASE_USER}'@'%';"
docker exec -it deploy-mysql-1 mysql -u$DATABASE_ROOT_LOGIN -p$DATABASE_ROOT_PASSWORD -e "FLUSH PRIVILEGES;"
# docker exec -i deploy-mysql-1 mysql -uroot -pprestashop be_111111 < ./dump.sql
docker exec -i deploy-mysql-1 mysql -u$DATABASE_USER -p$DATABASE_PASSWORD $DATABASE_NAME < ./dump.sql