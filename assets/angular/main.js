app.controller('mainCtrl', function ($rootScope, $scope, $cookies, $http) {
    var attempt_limit = 3;
    if ($cookies.get('theme')) {   
        $rootScope.theme = $cookies.get('theme');
    }

    $rootScope.changeTheme = function () {
        if ($cookies.get('theme')) {
            $cookies.put('theme', $cookies.get('theme') == 'white' ? 'dark' : 'white');
        } else {
            $cookies.put('theme', 'dark');
        }
        $rootScope.theme = $cookies.get('theme');
    }

    $rootScope.openModal = function (modal) {
        $rootScope.modal = modal;
        jQuery($rootScope.modal.selector).modal('show');
    }

    $rootScope.logout = function () {
        $cookies.remove('session_user');
        window.location = APP_URL + 'auth';
    }

    $rootScope.getSessionUser = function () {
        var session = $cookies.getObject('session_user');
        if (session) {
            $http({
                url: API_URL + (session.guard || 'admin') + '/profile/get',
                method: 'POST',
                data: {},
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + session.jwt
                }
            }).then(function (response) {
                if (response.data.status == 1) {
                    if (response.data.context.status == 1) {                    
                        $rootScope.profile_info = response.data.context.data;
                        $rootScope.time = moment(response.data.time).format('YYYY-MM-DD HH:mm:ss');
                    } else {
                        $rootScope.logout();
                    }
                }
            }, function (error) {
                if (--attempt_limit > 0) {
                    setTimeout(function (){
                        $rootScope.getSessionUser();
                    }, 1000);
                } else {
                    $rootScope.logout();
                }
            });
        } else {
            $rootScope.logout();
        }
    }

    
    setInterval(function () {
        $rootScope.time = moment($rootScope.time).add('+1', 'seconds').format('YYYY-MM-DD HH:mm:ss');
        $rootScope.$apply();
    }, 1000);

    $rootScope.getSessionUser();
    setInterval(function () {
        $rootScope.getSessionUser();
    }, 8000);
});