'use strict';

var app = angular.module("portfolio", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider

    when('/home', { 
        templateUrl: 'assets/app/router/templates/home.php',
        controller: "workController"
      })

    when('/about', { 
        templateUrl: 'assets/app/router/templates/about.php'
      })

    when('/contact', { 
        templateUrl: 'assets/app/router/templates/contact.php',
        controller: "workController"
      })

     when('/work', { 
        templateUrl: 'assets/app/router/templates/work.php',
        controller: "workController"
      })

     when('/work/projects/:id', { 
        templateUrl: 'assets/app/router/templates/projects.php',
        controller: "projectsController"
      })

    otherwise({
      redirectTo: 'home'
    });
});