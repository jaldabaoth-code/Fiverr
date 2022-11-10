<h1>Fiverr (Hackathon 2, WCS Web PHP)</h1>

### Create a prototype site for "Fiverr where customers can get help" by using Symfony


---

### index

1. [Prerequisites](#Prerequisites)
2. [Users](#Users)
3. [Installation](#Steps)
4. [Authors](#Authors)

### Prerequisites

* [PHP 7.4.*](https://www.php.net/releases/7_4_0.php) (check by running php -v in your console)
* [Composer 2.*](https://getcomposer.org/) (check by running composer --version in your console)
* [node 14.*](https://nodejs.org/en/) (check by running node -v in your console)
* [Yarn 1.*](https://yarnpkg.com/) (check by running yarn -v in your console)
* [MySQL 8.0.*](https://www.mysql.com/fr/) (check by running mysql --version in your console)
* [Git 2.*](https://git-scm.com/) (check by running git --version in your console)


### Steps

If you meet the prerequisites, you can proceed to the installation of the project 

1. Clone the repo from GitHub : `git clone git@github.com:jaldabaoth-code/Fiverr.git`
2. Enter the directory : `cd Fiverr`
3. Open with your code editor
4. Run `composer install` to install PHP dependencies
5. Run `yarn install` to install JS dependencies
6. Copy the `.env` file and fill Database information
7. Run `symfony console doctrine:database:create` to create database
8. Run `symfony console doctrine:migration:migrate` to create structure of database
9. Run `symfony console doctrine:fixtures:load` to load the fixtures in database
10. Run `yarn encore dev` to build assets
11. Run `symfony server:start` to launch symfony server
12. Go to <b>localhost:8000</b> with your favorite browser


### Authors

* [Raphaël Billet Servoin](https://github.com/RaphaelBS-WCS)
* [Zurabi Grialat](https://github.com/jaldabaoth-code)
* [Maxime Giraudeau](https://github.com/Wowlfy)
* [Julien Moineau](https://github.com/JuMn88)

---

## The Links

<a href="https://github.com/Wowlfy/hackathon-2">Link to the repository of project where we worked during <b>WCS Web Hackathon 2</b></a>
