// var app =  angular.module('main-App',['ngRoute','angularUtils.directives.dirPagination']);
// app.config(['$routeProvider',
//     function($routeProvider) {
//         $routeProvider.
//             when('/', {
//                 templateUrl: 'templates/home.html',
//                 controller: 'AdminController'
//             }).
//             when('/items', {
//                 templateUrl: 'templates/items.html',
//                 controller: 'ItemController'
//             });
// }]);

var app =  angular.module('main-App',['ngRoute','angularUtils.directives.dirPagination']);
app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'templates/home.html',
                controller: 'AdminController'
            }).
            when('/taglist', {
                templateUrl: 'templates/items.html',
                controller: 'ItemController'
            });
}]);
