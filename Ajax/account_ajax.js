$(function() {

    $('#logout__button').click(function(e) 
    {
        const button = $('#logout__button')
        e.preventDefault();

        $.ajax(
        {
            type: "POST",
            url: "../Controllers/logout_controller.php",
            data: button.serialize(),
            success: function(response)
            {   
                if (response !== false)
                {
                    console.log(response);
                    window.location.href = '../Views/login_view.php';
                } else
                {
                        alert('Error');
                }
            }
        }
        )
    })
})