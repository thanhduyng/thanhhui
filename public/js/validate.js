$().ready(function() {
    $("#jsvalidations").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "user_nm_j": {
                required: true,
            },
            "user_ab_j": {
                required: true,
            },
            "user_nm_e": {
                required: true,
            },
            "user_ab_e": {
                required: true,
            },
            "pwd": {
                required: true,
                min:8
            },
            "belong_div": {
                required: true
            },
            "position_div": {
                required: true
            },
            "auth_role_div": {
                required: true
            },
            "incumbent_div": {
                required: true
            },
        },
        messages: {
            "user_nm_j": {
                required: "Không được để trống",
            },
            "user_nm_e": {
                required: "Không được để trống",
            },
            "user_ab_e": {
                required: "Không được để trống",
            },
            "user_ab_j": {
                required: "Không được để trống",
            },
            "pwd": {
                required: "Không được để trống",
                min: "Nhập lớn hơn 8 ký tự"
            },
            "belong_div": {
                required: "Vui lòng chọn",
            },
            "position_div": {
                required: "Vui lòng chọn",
            },
            "auth_role_div": {
                required: "Vui lòng chọn",
            },
            "incumbent_div": {
                required: "Vui lòng chọn",
            },
        }
    });
});