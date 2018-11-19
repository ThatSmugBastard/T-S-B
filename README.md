# WordPress Template

## Requirements

* [Docker](https://store.docker.com/editions/community/docker-ce-desktop-mac) - Build, Ship, and Run Any App, Anywhere. The preferred container platform at The Farm. Even though it's not entirely correct, you can think of it as a system for creating isolated virtual machines for your applications.
* Docker Compose - A tool for defining and running multi-container Docker applications. Installing Docker for Mac will install Docker Compose as well, so there is no need to install this separately.

## Getting Started

```bash
git clone git@code.tf:emil.tholin/wordpress-template.git
cd wordpress-template
docker-compose up
```

Your server is now running on [http://localhost:8000/](http://localhost:8000/). Follow the instructions given there to get an admin account.

Finally you have to log in and visit `Appearance` -> `Themes` and activate `Wordpress Template`. Your custom template is now active and you can hack away in the files in `public_html/wp-content/themes/template`!

## Additional information

### MySQL

If you ever have to interact with the database, you can connect to the container MySQL database with something like [Sequel Pro](https://www.sequelpro.com/) using this information:
```
Host: 127.0.0.1  
Username: wordpress  
Password: wordpress  
Database: wordpress  
Port: 3308
```
