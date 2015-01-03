'use strict';

angular.module('myApp.portal', ['ngRoute'])


.controller('e3carouselCtrl', ['$scope', function($scope){
        $scope.myInterval = 5000;
        var slides = $scope.slides = [];
        $scope.addSlide = function() {
            var pic = 1+slides.length;
            slides.push({
                image: 'img/e3main_carousel' + '/' + pic + '.jpg',
                text: ''
            });
        };
        for (var i=0; i<3; i++){
            $scope.addSlide();
        }
}]);