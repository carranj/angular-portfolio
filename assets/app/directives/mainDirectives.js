app.directive('tooltip', function(){
    return {
        restrict: 'A',
        link: function(scope, element, attrs){
            $(element).hover(function(){
                // on mouseenter
                $(element).tooltip('show');
            }, function(){
                // on mouseleave
                $(element).tooltip('hide');
            });
        }
    };
});

app.filter('removeSpaces', [function() {
return function(string) {
    if (!angular.isString(string)) {
        return string;
    }
    return string.replace(/[\s]/g, '');
    };
}]);