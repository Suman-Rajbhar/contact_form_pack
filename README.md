# Laravel suitable Contact Form
## This package is for manage a dynamic contact information storing into database and also sending email to admin.

### Installations
composer require sumanraj/contact_form

### Configuration
php artisan vendor:publish --provider="Sumanraj\Contact\ContactServiceProvider"

### Database Migration (Create a table <contacts> into Database)
php artisan migrate

### Mail Configurations
##### Edit .env for test mail configure
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_user_name
MAIL_PASSWORD=your_mailtrap_user_password
MAIL_ENCRYPTION=TLS

##### Sender mail configuration
-> Edit config/contactconfig.php
    'send_to' => 'your_receiver_mail_id@gmail.com'
