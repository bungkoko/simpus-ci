$(document).ready(function () {
    $("#anggota_kd").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://localhost/simpus-material/index.php/member/getMemberName",
            data: {
                keyword: $("#anggota_kd").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownMember').empty();
                    $('#anggota_kd').attr("data-toggle", "dropdown");
                    $('#DropdownMember').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#anggota_kd').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownMember').append('<li role="displayMember" ><a role="menuitem dropdownMemberli" class="dropdownlivalue">' + value['name'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#country').val($(this).text());
    });
});



 $(function () {
            //Datetimepicker plugin
            $('.datetimepicker').bootstrapMaterialDatePicker({
                format: 'dddd DD MMMM YYYY - HH:mm',
                clearButton: true,
                weekStart: 1
            });

            $('.datepicker').bootstrapMaterialDatePicker({
                format: 'YYYY-MM-DD',
                clearButton: true,
                weekStart: 1,
                time: false
            });

            $('.timepicker').bootstrapMaterialDatePicker({
                format: 'HH:mm',
                clearButton: true,
                date: false
            });
        });