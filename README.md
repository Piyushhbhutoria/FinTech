# Fin-Tech

> **Feel Free To Contribute.**

## This Repo is Fin-Tech Project using PHP7.x, PHPmyadmin, mySQL5.x

Features

1. User account login
2. Transaction History

user test account - email@gmail.com  
password - 1234

### Setup

Change credentials in config.php.

```php
<?php $con = mysqli_connect("localhost","user","password","database") or die(mysqli_error($con)); ?>
```

Open PHPmyadmin create a database named project.  
Import the travel.sql file in database folder.
