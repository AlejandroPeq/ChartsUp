<img src="http://chartsup.esy.es/images/logoTFGblack.png" alt="ChartsUp logo" width="200px;">

![ChartsUp](http://chartsup.esy.es/images/wellcomeSnapt.png)

**Introduction**

The main goal of this project is to define a tool that allows the user to flexibly display the information that is stored in different ways in one of the most active collaborative communities, Wikia, and extract specific data to perform analysis on it.

In this project we use components from Gentellela Bootstrap Admin Template. This template uses the default Bootstrap 3.x.x styles along with a variety of powerful jQuery plugins and tools to create a powerful framework for creating admin panels or back-end dashboards. We also use PHP Simple HTML DOM Parser to capture all the data from the collaborative platform and store it into our database. Due to the fact that we need to show a large amount of chats, we decided to use Echarts JS, a powerful charting and visualization library.

We have a [version accessible](http://chartsup.esy.es) to all , so you can test the Key Features.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisities

To put into production, the application on a local machine , you must have the following:

A local web server that allows the execution of html, css and js files.

A database manager to import the structure of the database and manage stored information. 

An example containing all the above is [XAMPP](https://www.apachefriends.org/es/index.html) a distribution of Apache completely free and easy to install containing MariaDB , PHP and Perl. The XAMPP installation package has been designed to be incredibly easy to install and use.  


### Installing

Once installed xampp , we headed to the XAMPP folder within htdocs put all files in the folder called production

Then run xampp contol to start the apache server and mysql.

Now we need to import the database . To do this we write in the browser:

```
http://localhost/dashboard
```

Import the tfgdatabase.sql file using phpmyadmin tool.

![ChartsUp](http://chartsup.esy.es/images/importar.png)


If we import the database data, then we should not do anything else. It is the most simple and quick process.

If we want to get the most current data then we run our crawling located within the folder , once imported the empty database .

The order of execution of scripts that analyze wikia have a specific order. First , we run the files in the folder insert . Then we run the files in the update folder. In this version must be run by hand and some of them can take several hours.


After importing the database either way , we can access the chartsup application in which we can visualize comparative graphs such as those we see in the following screenshot 

![ChartsUp](http://chartsup.esy.es/images/comparadorCaptura.png)



## Deployment

To put the web application in a real environment , we must do the same process.

We need a hosting, to provide us with a web server and a database engine that allows us to use languages ​​like php backend .

## Built With

* PHP
* Google Fonts
* Bootstrap
* Font Awesome
* jQuery-Autocomplete
* dataTables
* Dropzone
* ECharts
* bootstrap-wysiwyg
* Flot - Javascript plotting library for jQuery.
* gauge.js
* iCheck
* jquery.inputmask plugin
* Ion.RangeSlider
* jQuery
* moment.js
* jquery-nicescroll plugin
* PNotify - Awesome JavaScript notifications
* NProgress
* Pace
* Parsley
* bootstrap-progressbar
* select2
* Sidebar Transitions - simple off-canvas navigations
* jQuery Sparklines plugin
* switchery - Turns HTML checkbox inputs into beautiful iOS style switches
* jQuery Tags Input Plugin
* Autosize - resizes text area to fit text
* validator - HTML from validator using jQuery
* jQuery Smart Wizard

## Contributing

To contribute, please ensure that you have stable Node.js and npm installed.

Test if Gulp CLI is installed by running gulp --version. If the command isn't found, run npm install -g gulp. For more information about installing Gulp, see the Gulp's Getting Started.

If gulp is installed, follow the steps below.

* Fork and clone the repo.
* Run gulp, this will will open gentelella on your default browser
* Now you can code, code and code!
* Submit a pull request

## Authors

* Alejandro Pequeño Pulleiro - [Github Profile](https://github.com/AlejandroPeq)
* Claudia Gil Navarro - [Github Profile](https://github.com/claudiagil)
* Alejandro Del Valle Silva - [Github Profile](https://github.com/AlexDvs)

## License

MIT License

Copyright (c) 2016

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

the software is provided "as is", without warranty of any kind, express or implied, including but not limited to the warranties of merchantability, fitness for a particular purpose and noninfringement. in no event shall the authors or copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise, arising from, out of or in connection with the software or the use or other dealings in the software.

## Acknowledgments

* Gentellela Bootstrap Admin Template
* PHP Simple HTML DOM Parser


