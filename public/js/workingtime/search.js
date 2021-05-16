function BTN_Search() {
    var work_report_no = $('#TXT_work_report_no').val();
    var work_user_cd = $('#TXT_work_user_cd').val();
    var user_nm_j = $('#TXT_user_nm_j').val();
    var work_date = $('#TXT_working_date_from').val();
    var work_dateto = $('#TXT_working_date_to').val();
    var manufacture_no = $('#TXT_manufacture_no').val();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                "content"
            ),
        },
    });

    $.ajax({
        method: "POST",
        url: "/working-time-search",
        data: {
            work_report_no: work_report_no,
            work_user_cd: work_user_cd,
            user_nm_j: user_nm_j,
            work_date: work_date,
            work_dateto: work_dateto,
            manufacture_no: manufacture_no,
        },
        success: function(response) {
            console.log(response);
            var arr = JSON.parse(JSON.stringify(response));
            $('#searchTable').find("tbody tr").remove();
            $.each(arr, function(key, value) {
                console.log(value['work_date']);
                console.log(value['work_dateto']);
                $('#searchTable').append("<tr><td>" 
                + value['work_report_no'] + "</td><td>" 
                + value['manufacture_no'] + "</td><td>" 
                + value['work_date'] + "</td><td>" 
                + value['work_user_cd'] + "</td><td>" 
                + value['user_nm_j'] + "</td><td>" 
                + value['work_hour_div'] + "</td></tr>"
                );
            });
        }
    });

}