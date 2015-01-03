'use strict';

// Declare app level module which depends on views, and components
angular.module('myApp', [
  'ngRoute',
  'myApp.portal',
  'myApp.e3modern',
  'myApp.boozetique',
  'myApp.version',
  'ui.bootstrap'
])
.config(['$routeProvider', function($routeProvider) {
        $routeProvider.when('/portal', {
        templateUrl: 'public/app/portal/portal.html',
        controller: 'carouselCtrl'
        });
        $routeProvider.when('/e3modern', {
        templateUrl: 'public/app/e3modern/e3modern.html',
        controller: 'carouselCtrl'
        });
        $routeProvider.when('/boozetique', {
          templateUrl: 'public/app/boozetique/boozetique.html',
          controller: 'carouselCtrl'
        });
        $routeProvider.when('/press', {
          templateUrl: 'public/app/press/press.html',
          controller: 'carouselCtrl'
        });
        $routeProvider.
          otherwise({redirectTo: '/portal'});
}])
.controller('NavCtrl', ['$scope', function($scope){
        $scope.isCollapsed = true;
}])
.factory('picService', ['$http', '$scope', function(){
        $scope.images = $http.get('/api/get-pics').success(function(){
            for(image in $scope.images){
                console.log('<p>' + image + '</p>');
            }
        });
}])
.controller('carouselCtrl', ['$scope', '$http', function($scope){
        $scope.myInterval = 5000;
        var slides = $scope.slides = [];
        $scope.addSlide = function() {
            var newWidth = 601 + slides.length;
            slides.push({
                image: 'http://placekitten.com/' + newWidth + '/300',
                text: ['More','Extra','Lots of','Surplus'][slides.length % 4] + ' ' +
                    ['Cats', 'Kittys', 'Felines', 'Cutes'][slides.length % 4]
            });
        };
        for (var i=0; i<4; i++){
            $scope.addSlide();
        }
}]);
