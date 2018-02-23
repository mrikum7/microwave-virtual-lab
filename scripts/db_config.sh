
#!/bin/bash
# To avoid prompt for user credentials
export DEBIAN_FRONTEND=noninteractive
apt-get -q -y install mysql-server
apt-get php5-mysql -y
# mysql -u root -Bse "create database YOUR_DATABASE_NAME;"
mysql -u root -Bse "create database websupp2_virtual;"
cd ../src/database
# Replace "emt" with your database name
# Replace "emt.sql" file with your file
# Note: If you have more than one .sql file repeat below command w.r.t to database and file name
mysql -u root websupp2_virtual<websupp2_virtual.sql
