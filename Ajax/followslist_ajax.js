$(function() {

    $('#follows__button').click(function(e) 
    {
        const button = $('#follows__button')
        e.preventDefault();

        $.ajax(
        {
            type: "POST",
            url: "../Controllers/followslist_controller.php",
            data: button.serialize(),
            success: function(response)
            {   
                if (response !== null && response !== "")
                {
                    alert (response);
                } else
                {
                    alert('You are not following any profile.');
                }
            }
        }
        )
    })
})