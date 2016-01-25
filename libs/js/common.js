$(document).ready(function () {



    $("input,select,textarea").jqBootstrapValidation();

    $(".sort span").click(function () {
        var id = $(this).attr('id');
        $("#fon").css({'display': 'block'});
        $("#load").fadeIn(100, function () {
        $(".test1").html("");
            $.ajax({
                url: 'http://beejee.esy.es/home/u278763549/Comment/sortComment',
                data: 'sort_id=' + id,
                type: 'post',
                success: function (date) {
                    $(".box_test").css({'display': 'block'})
                    $(".box_test").html(date).hide().fadeIn(1000);
                    $("#fon").css({'display': 'none'});
                    $("#load").fadeOut(1000);
                }
            });
        });
    });

    $("#button").click(function () {

            $.ajax({
                url: "http://beejee.esy.es/home/u278763549/Comment/addComment",
                type: 'post',
                data: $('form').serialize(),
                success: function (data) {
                    $("#data").html(data);
                    console.log(data);

                }
            });

    });
    $('#modal-1').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            var recipient = button.data('whatever')
            var name = $("#name").val()
            var email = $("#email").val()
            var message = $("#message").val()
            var modal = $(this)
            modal.find('.modal-title').text(recipient)
            modal.find('.comment_name').html(name)
            modal.find('.comment_email').html(email)
            modal.find('.comment_message').html(message)


     })

    $('#modal-2').on('show.bs.modal', function (event) {


    })
});







