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
MAIL_MAILER=smtp<br/>
MAIL_HOST=smtp.mailtrap.io<br/>
MAIL_PORT=2525<br/>
MAIL_USERNAME=your_mailtrap_user_name<br/>
MAIL_PASSWORD=your_mailtrap_user_password<br/>
MAIL_ENCRYPTION=TLS

##### Sender mail configuration
-> Edit config/contactconfig.php<br/>
    'send_to' => 'your_receiver_mail_id@gmail.com'
