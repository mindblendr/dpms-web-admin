var app = angular.module('dpmsApp', ['ngCookies']);

app.config(['$cookiesProvider', function ($cookiesProvider) {
    // Set $cookies defaults
    $cookiesProvider.defaults.path = '/';
    $cookiesProvider.defaults.expires = moment(new Date()).add('days', 1).toDate();
}]);

app.directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if (event.which === 13) {
                scope.$apply(function () {
                    scope.$eval(attrs.ngEnter);
                });

                event.preventDefault();
            }
        });
    };
});

app.filter("range", function () {
    return function (input, range) {
        range = {
            from: parseInt(range.from),
            to: parseInt(range.to)
        };

        for (var i = range.from; i <= range.to; i++) {
            input.push(i);
        }

        return input;
    };
});

app.directive('ngPagination', function () {
    var template = `<ul class="pull-right pagination" ng-show="pagination.no_of_pages > 1">
                        <li class="paginate_button page-item previous" ng-class="pagination.page == 1 ? 'disabled' : ''">
                            <a href="#" ng-click="pagination.request(pagination.page - 1)" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item" ng-class="pagination.page == n ? 'active' : ''" ng-repeat="n in [] | range: {from: pagination.from, to: pagination.to}">
                            <a href="#" ng-click="pagination.request(n)" class="page-link"><span ng-bind="n"></span></a>
                        </li>
                        <li class="paginate_button page-item next" ng-class="pagination.page >= pagination.no_of_pages ? 'disabled' : ''">
                            <a href="#" ng-click="pagination.request(pagination.page + 1)" tabindex="0" class="page-link">Next</a>
                        </li>
                    </ul>`;
    return {
        restrict: 'A',
        scope: {
            pagination: '=',
        },
        template: template,
        controller: function ($scope) {
            $scope.$watchCollection('pagination', function () {
                if ($scope.pagination) {
                    var range = 10;
                    $scope.pagination.from = ((Math.ceil($scope.pagination.page / range) - 1) * range) + 1;
                    $scope.pagination.to = (Math.ceil($scope.pagination.page / range)) * range;
                    if ($scope.pagination.to > $scope.pagination.no_of_pages) {
                        $scope.pagination.to = $scope.pagination.no_of_pages;
                    }
                }
            });
        }
    }
});

app.filter('unsafe', function ($sce) { return $sce.trustAsHtml; });