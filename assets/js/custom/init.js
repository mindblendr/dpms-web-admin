const APP_URL = 'http://admin.dpms.me/';
const API_URL = 'http://api.dpms.me/';

var swal = Swal.mixin({
    buttonsStyling: false,
    customClass: {
        confirmButton: 'btn btn-alt-success m-5',
        cancelButton: 'btn btn-alt-danger m-5',
        input: 'form-control'
    }
});

var showErrors = function (errors, title) {
    title = title || 'Error'
    var html = '<div>';
    Object.keys(errors).forEach(function (key) {
        html += `<div class="row"><div class="col-12">${errors[key]}</div></div>` 
    });
    html += '</div>';

    swal.fire({
        title: title,
        html: html,
        type: 'error'
    });
}