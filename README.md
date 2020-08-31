# gastro-covid19-guest-register
This is a very basic web form to register for COVID-19 tracking when visiting a restaurant (as required in Germany).

## Requirements: 
- Webserver, PHP and a writable data folder.

## Setup: 
- Copy data into /etc/cron.d, make sure auto deletion of files in data after 31 days is working 
- Copy data into /var/www, make sure /var/www/data is writeable by the web server but not readable via HTTP(s).
- Add a restaurant name in the title of the pages and a responsible person in the GDPR (DSGVO) declaration file.
- Running: Data is put into /var/www/data in JSON format
