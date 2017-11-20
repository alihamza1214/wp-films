## Wordpress based CodeLineFilms App

### Steps for Installation
##### 1 - Download or clone the project from the specified git-repo.
##### 2 - Make sure, that your system is running on PHP >=5.5.9
##### 3 - Place the folder in your server root eg /var/www/html folder
##### 4 - Import the Mysql Database via PHPmyadmin or commandline
##### 5 - Update the wp-config.php file that is in the root of project with the database settings
##### 6 - Follow a generic wordpress migration procedure to set the result up into your testing environment. Use this tool (https://github.com/interconnectit/Search-Replace-DB) to replace all old urls with new urls in the new database.
##### 7 - Assign "777" permissions to application's "storage" and "bootstrap" directories
##### 8 - Access the application with the specified Urls and login to app and go

### Authenticated User Credentials
##### 1- User Creds :
    username : naeem
    pass : niki.00028

### Application Description

1. Inside admin

1.1) install clean Wordpress: DONE

1.2) install theme Unite. It has Bootstrap 3 inside.  DONE

1.3) create child theme from Unite   DONE

1.4) add new type of post "Films". We need possibility to add new films.    DONE

1.5) Add following taxonimies to films: Genre, Country, Year and Actors     DONE

1.6) Add custom text fields "Ticket Price" and "Release Date". You can use extension or do it on your own    DONE

1.7) Add 3 films with test data just to prove that it works	DONE


2. Public view

2.1) add values "Country", "Genre", "Ticket Price", "Release Date" at film page under description. We must use custom page in child theme in that particular case   (DONE)

2.2) add values "Country", "Genre", "Ticket Price", "Release Date" at list of films. We must use hook here.	DONE

2.3) create shortcode to show last 5 films. We need to add shortcode at right sidebar under search field.	DONE

