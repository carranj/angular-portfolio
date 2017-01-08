var app = angular.module("portfolio", ['ngRoute', 'ngAnimate']);

app.config(["$routeProvider", function($routeProvider) {
    $routeProvider

    .when('/home', { 
        templateUrl: 'assets/app/router/templates/home.php',
        controller: "homeController"
      })

    .when('/about', { 
        templateUrl: 'assets/app/router/templates/about.php',
        controller: "AboutController"
      })

    .when('/contact', { 
        templateUrl: 'assets/app/router/templates/contact.php',
        controller: "ContactController"
      })

     .when('/work', { 
        templateUrl: 'assets/app/router/templates/work.php',
        controller: "workController"
      })

     .when('/work/:id', { 
        templateUrl: 'assets/app/router/templates/projects.php',
        controller: "projectController"
      })

    .otherwise({
      redirectTo: 'home'
    });

}]);