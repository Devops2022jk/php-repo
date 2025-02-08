# Use the official PHP image with Apache
FROM php:8.2-apache

# Removing default index.hmtl file
RUN rm -rf /var/www/html/index.html

# Copy the application code into the container
COPY index.php /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Grant permissions to the Apache server
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
