app.controller('authCtrl', function ($rootScope, $scope, $http, $cookies) {
    $scope.login = function () {
        $http({
            url: API_URL + 'auth/admin',
            method: 'POST',
            data: {
                username: $scope.username,
                password: $scope.password,
                pin: $scope.pin
            },
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(function (response) {
            if (response.data.status == 1) {
                if (response.data.context.status == 1 && response.data.context.data) {
                    $cookies.putObject('session_user', {
                        jwt: response.data.context.data.jwt,
                        guard: response.data.context.data.guard
                    });
                    window.location = APP_URL;
                }
            }
        }, function (error) {
            console.log(error);            
        });
    }
});