app.controller('projectController', ['$scope', 'projects', '$routeParams', function($scope, projects, $routeParams) {
  projects.success(function(data) {
    $scope.pageClass = data[$routeParams.id].shortname;
    $scope.detail = data[$routeParams.id];
  });
}]);