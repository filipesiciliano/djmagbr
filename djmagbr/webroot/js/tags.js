$(function () {
    $('#s2_djtags').select2({
        placeholder: "Selecione...",
        tags: []
    });

    var selectedDJ = $('djs');

    $('.link_dj').each(function (btn) {
        $(this).on('click', function (e) {
            e.preventDefault();
            var tag_id = $(this).data('tag-id');
            var vote_id = $(this).data('vote-id');
            var tr = $(this).parent().parent();
            var dj_id = tr.find('.select_dj option:selected').val();
            if (dj_id) {
                $.get('/djs/linktag/' + dj_id + '/' + tag_id + '/' + vote_id).success(function (response) {
                    if (response.success){
                        tr.remove();
                        alert(response.message);
                    } else {
                        alert(response.message);
                    }
                });
            } else {
                alert('Selecione um DJ');
            }
        });
    });

})
