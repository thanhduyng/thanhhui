$('#addT').show();
$('#addButton').show();
$('#updateT').hide();
// $('#updateButton').hide();

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

function clearData() {
    $('#user_cd').val('');
    $('#user_nm_j').val('');
    $('#user_ab_j').val('');
    $('#user_nm_e').val('');
    $('#user_ab_e').val('');
    $('#pwd').val('');

    $('#user_cdError').text('');
    $('#user_nm_jError').text('');
    $('#user_ab_jError').text('');
    $('#user_nm_eError').text('');
    $('#user_ab_eError').text('');
    $('#pwdError').text('');
}

// --------- add ----------
function addData() {
    var user_cd = $('#user_cd').val();
    var user_nm_j = $('#user_nm_j').val();
    var user_ab_j = $('#user_ab_j').val();
    var user_nm_e = $('#user_nm_e').val();
    var user_ab_e = $('#user_ab_e').val();
    var pwd = $('#pwd').val();
    var belong_div = $('#belong_div').val();
    var position_div = $('#position_div').val();
    var auth_role_div = $('#auth_role_div').val();
    var incumbent_div = $('#incumbent_div').val();
    var pwd_upd_datetime = $('#pwd_upd_datetime').val();
    var login_datetime = $('#login_datetime').val();
    var memo = $('#memo').val();

    $.ajax({
        type: "POST",
        dateType: "json",
        data: {
            user_cd: user_cd,
            user_nm_j: user_nm_j,
            user_ab_j: user_ab_j,
            user_nm_e: user_nm_e,
            user_ab_e: user_ab_e,
            pwd: pwd,
            belong_div: belong_div,
            position_div: position_div,
            auth_role_div: auth_role_div,
            incumbent_div: incumbent_div,
            pwd_upd_datetime: pwd_upd_datetime,
            login_datetime: login_datetime,
            memo: memo,
        },
        url: "/users/storemuser",
        success: function (data) {
            clearData();

            // start alert
            const Msg = Swal.mixin({
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            })

            Msg.fire({
                type: 'success',
                title: 'Thêm thành công',
            })
            // end alert
            console.log(' thêm dữ liệu thành công');
        },

        error: function (error) {
            $('#user_cdError').text(error.responseJSON.errors.user_cd);
            $('#user_nm_jError').text(error.responseJSON.errors.user_nm_j);
            $('#user_ab_jError').text(error.responseJSON.errors.user_ab_j);
            $('#user_nm_eError').text(error.responseJSON.errors.user_nm_e);
            $('#user_ab_eError').text(error.responseJSON.errors.user_ab_e);
            $('#pwdError').text(error.responseJSON.errors.pwd);
        }
    })
}
// --------- end add ----------


// -------update-------

function updateData() {
    var user_cd = $('#user_cd').val();
    var user_nm_j = $('#user_nm_j').val();
    var user_ab_j = $('#user_ab_j').val();
    var user_nm_e = $('#user_nm_e').val();
    var user_ab_e = $('#user_ab_e').val();
    var pwd = $('#pwd').val();
    var belong_div = $('#belong_div').val();
    var position_div = $('#position_div').val();
    var auth_role_div = $('#auth_role_div').val();
    var incumbent_div = $('#incumbent_div').val();
    var pwd_upd_datetime = $('#pwd_upd_datetime').val();
    var login_datetime = $('#login_datetime').val();
    var memo = $('#memo').val();

    $.ajax({
        type: "POST",
        dataType: 'json',
        data: {
            user_nm_j: user_nm_j,
            user_ab_j: user_ab_j,
            user_nm_e: user_nm_e,
            user_ab_e: user_ab_e,
            pwd: pwd,
            belong_div: belong_div,
            position_div: position_div,
            auth_role_div: auth_role_div,
            incumbent_div: incumbent_div,
            pwd_upd_datetime: pwd_upd_datetime,
            login_datetime: login_datetime,
            memo: memo,
        },
        url: "/users/updatemuser/" + user_cd,
        success: function (data) {
            clearData();
            // start alert
            const Msg = Swal.mixin({
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            })

            Msg.fire({
                type: 'success',
                title: 'Cập nhập thành công',
            })
            // end alert
            console.log('cập nhập thành công');
        },
        error: function (error) {
            $('#user_nm_jError').text(error.responseJSON.errors.user_nm_j);
            $('#user_ab_jError').text(error.responseJSON.errors.user_ab_j);
            $('#user_nm_eError').text(error.responseJSON.errors.user_nm_e);
            $('#user_ab_eError').text(error.responseJSON.errors.user_ab_e);
            $('#pwdError').text(error.responseJSON.errors.pwd);
        }
    })
}
// -------end update-------

// -------delete m_user-------
$("#BTN_Delete").on("click", function () {
    var user_cd = $("#user_cd").val();
    // var url = $(this).attr('data-url')
    var url = "/users/destroy/" + $("#user_cd").val();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                "content"
            ),
        },
    });
    $.ajax({
        method: "POST", 
        url: "/users/destroy/" + user_cd, 

        success: function (response) {
            clearData();
            // start alert
            const Msg = Swal.mixin({
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            })

            Msg.fire({
                type: 'success',
                title: 'Xóa thành công',
            })
            // end alert
            console.log(' Xóa dữ liệu thành công');
        },
        error: function (error) {
            $('#user_cdError').text(error.responseJSON.errors.user_cd);
        },
    });
});

// -------end delete m_user-------


$('#searchid').on('click', function () {
    $.ajax({
        method: "get",
        url: "/searchid",
        data: {
            user_cd: user_cd,
        },
        success: function (response) {
            console.log(response);
            var arr = JSON.parse(JSON.stringify(response));
            $('#idform').find("tbody tr").remove();
            $.each(arr, function (key, value) {
                console.log(value['user_cd']);
                $('#idform').append("<tr><td>" + value['user_cd'] + "</td><td>"
                    + value['user_nm_j'] + "</td><td>"

                    + value['user_ab_j'] + "</td><td>"

                    + value['lib_val_nm_js'] + "</td></tr>"


                );
            });
        }
    });
});