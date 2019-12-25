app.controller('dentistCtrl', function ($rootScope, $scope, $scope, $http, $cookies) {
    console.log($cookies.getObject('session_user'));
    $scope.getDentists = function (page, keyword) {
        var session = $cookies.getObject('session_user');
        page = page || 1;
        keyword = keyword || null;

        var form_data = {
            page: page,
            limit: 10,
        };

        if (keyword) {
            form_data['column'] = 'username';
            form_data['keyword'] = keyword;
        }

        $http({
            url: API_URL + 'admin/dentist',
            method: 'POST',
            data: form_data,
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + session.jwt
            }
        }).then(function (response) {
            if (response.data.status == 1) {
                if (response.data.context.status == 1) {                    
                    $scope.dentists = response.data.context.data;
                    $scope.dentist_pagination = {
                        no_of_pages: response.data.context.no_of_pages,
                        page: response.data.context.page,
                        per_page: response.data.context.per_page,
                        offset: 1 + ((response.data.context.page - 1) * response.data.context.per_page),
                        request: $scope.getDentists
                    };
                } else {
                    $cookies.remove('session_user');
                    window.location = APP_URL + 'auth';
                }
            }
        }, function (error) {
            $cookies.remove('session_user');
            window.location = APP_URL + 'auth';
        });
    }

    $scope.deleteDentist = function (dentist) {
        if (dentist) {
            var session = $cookies.getObject('session_user');
            swal.fire({
                title: "Delete",
                html: `Are you sure you want to delete
                        <br>Dr. ${dentist.firstname} ${dentist.lastname} [${dentist.username}]?
                        <br><small class="text-danger"><i>You won\'t be able to revert this!</i></small>`,
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                if (result.value) {
                    $http({
                        url: API_URL + 'admin/dentist/delete',
                        method: 'POST',
                        data: {
                            dentist_id: dentist.id
                        },
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': 'Bearer ' + session.jwt
                        }
                    }).then(function (response) {
                        if (response.data.status == 1) {
                            if (response.data.context.status == 1) {                    
                                swal.fire({
                                    title: 'Dr. ' + dentist.firstname + ' ' + dentist.lastname + ' has been deleted',
                                    type: 'info',
                                });
                                
                                $scope.getDentists();
                            }
                        }
                    }, function (error) {
                    });
                }
            })
        }
    }

    $scope.changeStatus = function (dentist) {
        if (dentist) {
            var session = $cookies.getObject('session_user');
            swal.fire({
                title: 'Status Update',
                html: 'Are you sure you want to ' + (dentist.status == 1 ? 'block' : 'activate') + ' ' + dentist.firstname + ' ' + dentist.lastname + ' [' + dentist.username + ']?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, ' + (dentist.status == 1 ? 'block' : 'activate') + ' it!'
            }).then(function (result) {
                if (result.value) {
                    var form_data = {
                        dentist_id: dentist.id,
                        status: dentist.status == 1 ? '0' : '1'
                    };
                    $http({
                        url: API_URL + 'admin/dentist/edit',
                        method: 'POST',
                        data: form_data,
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': 'Bearer ' + session.jwt
                        }
                    }).then(function (response) {
                        if (response.data.status == 1) {
                            if (response.data.context.status == 1) {                    
                                swal.fire({
                                    title: 'Status Update',
                                    text: 'Dr. ' + dentist.firstname + ' ' + dentist.lastname + ' has been ' + (form_data.status == 1 ? 'activated' : 'blocked'),
                                    type: 'info',
                                });
                                
                                $scope.getDentists();
                            }
                        }
                    }, function (error) {
                    });
                }
            })
        }
    }

    $scope.editDentist = function (dentist) {
        $rootScope.openModal({
            title: 'Dentist',
            data: {
                id: dentist.id,
                username: dentist.username,
                firstname: dentist.firstname,
                lastname: dentist.lastname,
            },
            selector: '#modal_dentist_form',
            save: function (dentist) {
                if (dentist) {
                    if (dentist.pin && (dentist.pin.length != 4 || isNaN(dentist.pin))) {
                        showErrors({
                            pin: 'The Pin must be 4 digit numbers.'
                        });
                    }
                    var session = $cookies.getObject('session_user');
                    swal.fire({
                        title: 'Save Account',
                        html: 'Are you sure you want to update<br>Dr. ' + dentist.firstname + ' ' + dentist.lastname + ' [' + dentist.username + ']?',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, save it!'
                    }).then(function (result) {
                        if (result.value) {
                            var form_data = {
                                username: dentist.username,
                                password: dentist.password,
                                confirm_password: dentist.confirm_password,
                                pin: dentist.pin,
                                firstname: dentist.firstname,
                                lastname: dentist.lastname,
                            };

                            if (dentist.id) {
                                form_data['dentist_id'] = dentist.id;
                            }

                            $http({
                                url: API_URL + 'admin/dentist/' + (!dentist.id ? 'add' : 'edit'),
                                method: 'POST',
                                data: form_data,
                                headers: {
                                    'Content-Type': 'application/json',
                                    'Authorization': 'Bearer ' + session.jwt
                                }
                            }).then(function (response) {
                                if (response.data.status == 1) {
                                    if (response.data.context.status == 1) {                    
                                        swal.fire({
                                            title: 'Save Account',
                                            text: 'Dr. ' + dentist.firstname + ' ' + dentist.lastname + ' has been saved!',
                                            type: 'info',
                                        });
                                        
                                        $scope.getDentists();
                                    } else {
                                        if (response.data.context.errors) showErrors(response.data.context.errors);
                                    }
                                }
                            }, function (error) {
                            });
                        }
                    })
                }
            },
        });
    }

    $scope.getDentists();
    $rootScope.searchData = $scope.getDentists;
});