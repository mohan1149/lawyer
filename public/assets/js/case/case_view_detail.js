"use strict";
var getNextDateModals = $('#getNextDateModals').val();

function nextDateAdd(case_id) {

    // ajax get modal
    $.ajax({
        url: getNextDateModals + "/" + case_id,
        success: function (data) {

            $('#show_modal_next_date').html(data);
            $('#modal-next-date').modal({
                backdrop: false,
                show: true,
            });

            // show bootstrap modal
            $('.modal-title').text('Add Next Date'); // Set Title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('Error adding / update data');
        }
    });
}

jQuery(document).ready(function () {

    $("#level_controller").on('change', (event) => {
        let level = $("#level_controller").val();
        switch (level) {
            case 'police':
                $('.police.hidden_field').css('display', 'block');
                $('.pros.hidden_field').css('display', 'none');
                $('.fd.hidden_field').css('display', 'none');
                $('.res.hidden_field').css('display', 'none');
                $('.excel.hidden_field').css('display', 'none');
                $('.exp.hidden_field').css('display', 'none');
                $('.shapes.hidden_field').css('display', 'none');
                break;
            case 'prosecution':
                $('.police.hidden_field').css('display', 'none');
                $('.pros.hidden_field').css('display', 'block');
                $('.fd.hidden_field').css('display', 'none');
                $('.res.hidden_field').css('display', 'none');
                $('.excel.hidden_field').css('display', 'none');
                $('.exp.hidden_field').css('display', 'none');
                $('.shapes.hidden_field').css('display', 'none');
                break;
            case 'first-degree':
                $('.police.hidden_field').css('display', 'none');
                $('.pros.hidden_field').css('display', 'none');
                $('.fd.hidden_field').css('display', 'block');
                $('.res.hidden_field').css('display', 'none');
                $('.excel.hidden_field').css('display', 'none');
                $('.exp.hidden_field').css('display', 'none');
                $('.shapes.hidden_field').css('display', 'none');
                break;
            case 'resumption':
                $('.police.hidden_field').css('display', 'none');
                $('.pros.hidden_field').css('display', 'none');
                $('.fd.hidden_field').css('display', 'none');
                $('.res.hidden_field').css('display', 'block');
                $('.excel.hidden_field').css('display', 'none');
                $('.exp.hidden_field').css('display', 'none');
                $('.shapes.hidden_field').css('display', 'none');
                break;
            case 'excellence':
                $('.police.hidden_field').css('display', 'none');
                $('.pros.hidden_field').css('display', 'none');
                $('.fd.hidden_field').css('display', 'none');
                $('.res.hidden_field').css('display', 'none');
                $('.excel.hidden_field').css('display', 'block');
                $('.exp.hidden_field').css('display', 'none');
                $('.shapes.hidden_field').css('display', 'none');
                break;
            case 'expert':
                $('.police.hidden_field').css('display', 'none');
                $('.pros.hidden_field').css('display', 'none');
                $('.fd.hidden_field').css('display', 'none');
                $('.res.hidden_field').css('display', 'none');
                $('.excel.hidden_field').css('display', 'none');
                $('.exp.hidden_field').css('display', 'block');
                $('.shapes.hidden_field').css('display', 'none');
                break;
            case 'shapes':
                $('.police.hidden_field').css('display', 'none');
                $('.pros.hidden_field').css('display', 'none');
                $('.fd.hidden_field').css('display', 'none');
                $('.res.hidden_field').css('display', 'none');
                $('.excel.hidden_field').css('display', 'none');
                $('.exp.hidden_field').css('display', 'none');
                $('.shapes.hidden_field').css('display', 'block');
                break;
        }
    });
});

