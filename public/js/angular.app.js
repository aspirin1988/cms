var app = angular.module('CMS',[]);

app.directive('fileModel', ['$parse', function ($parse) {
    return {
        restrict: 'A',
        link: function(scope, element, attrs) {
            var model = $parse(attrs.fileModel);
            var modelSetter = model.assign;
            element.bind('change', function(){
                scope.$apply(function(){
                    modelSetter(scope, element[0].files);
                });
            });
        }
    };
}]);

app.service('fileUpload', ['$http', function ($http) {

    this.uploadFileToUrl = function(file, uploadUrl, call){
        var fd = new FormData();
        fd.append('file', file);

        var result=false;

        return $http({
            method: 'POST',
            url: uploadUrl,
            data:fd,
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        }).then(function success(response) {
            call(response.data);
        }, function error(response) {});
    }
}]);

app.config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

app.controller('adminCtrl', function ($scope, $http, $sce) {

    $scope.Menus={"asas":dsadsa};
    $scope.Menu=[];
    $scope.idMenu=[];
    $scope.count=[];
    $scope.myHTML=[];



});