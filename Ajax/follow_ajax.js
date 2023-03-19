$(function() {

    $('#follow__button').click(function(e) 
    {
        const button = $('#follow__button').val()
        let data = {nickname__user:button}

        e.preventDefault();

        $.ajax(
        {
            type: "POST",
            url: "../Controllers/follow_controller.php",
            data: data,
            success: function(response)
            {   
                if (response !== false)
                {
                    alert("You're now following this user");
                } else
                {
                    alert('Error');
                }
            }
        }
        )
    })
})