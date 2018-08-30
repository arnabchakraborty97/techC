
# Tech C

Online quiz event for the event of Tech C in departmental fest, Innovision.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
Download composer from : https://getcomposer.org/download/ 
```

### Installing

A step by step series of examples that tell you how to get a development env running

Install Laravel using composer

```
Run the following code : <br><code>composer global require "laravel/installer"
```

Make the new laravel project with any name

```
composer create-project --prefer-dist laravel/laravel Innovision
```

Initialise git in the root directory

```
git init
```

Clone the project

```
git clone https://github.com/arnabchakraborty97/techC
```

Set the git remote

```
git remote upstream https://github.com/arnabchakraborty97/techC.git
```

Pull the files into your directory from GitHub

```
git pull upstream master
```

Change the DB_DATABASE=homestead, DB_USERNAME=homestead, DB_PASSWORD=secret in .env file in the root directory

Add your own credentials

Finally boot the project. Open command prompt and run the following : 

```
php artisan serve
```

Copy the ip provided and go to your browser to see the application.
