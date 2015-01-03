'use strict';

angular.module('myApp.e3modern', ['ngRoute'])


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
