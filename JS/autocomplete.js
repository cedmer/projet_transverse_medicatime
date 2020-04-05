$(document).ready(function() {
    $("#medic").keyup(function() {
        var query = $("#medic").val();

        if (query.length > 0) {
            $.ajax({
                url: '../../include/PHP/liste_medoc.php',
                method: 'POST',
                data: {
                    search: 1,
                    q: query
                },
                success: function(data) {
                    $("#response").html(data);
                },
                dataType: 'text'
            });
        }
    });

    $(document).on('click', 'li', function() {
        var country = $(this).text();
        $("#medic").val(country);
        $("#response").html("");
    });
});
