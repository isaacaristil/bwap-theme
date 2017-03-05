#! /bin/bash

DEST=${PWD##*/}
SAFE_DEST=$(echo $DEST | sed -e 's/-/_/g')

# Path to your WordPress installs
SITE_PATH="./app"

# Base URL (sites will be setup as subdirectories)
BASE_URL="http://localhost/$SAFE_DEST/app"

# Database information
DB_USER="root"
DB_PASS="l0c4lh05t"
DB_HOST="localhost"

# Create the database.
DB_NAME=SAFE_DEST
echo "Creating database $DB_NAME..."

mysql -u$DB_USER -p$DB_PASS -e"CREATE DATABASE $DB_NAME"

# Download WP Core.
wp core download --path=$SITE_PATH

# Generate the wp-config.php file
wp core config --path=$SITE_PATH --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASS --extra-php <<PHP
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_MEMORY_LIMIT', '256M');
PHP

# Install the WordPress database.
wp core install --path=$SITE_PATH --url=$BASE_URL/$DEST --title=$DEST --admin_user=test --admin_password=test --admin_email=YOU@YOURDOMAIN.com
