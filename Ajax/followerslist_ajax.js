$(function() {

    $('#followers__button').click(function(e) 
    {
        const button = $('#followers__button')
        e.preventDefault();

        $.ajax(
        {
            type: "POST",
            url: "../Controllers/followerslist_controller.php",
            data: button.serialize(),
            success: function(response)
            {   
                console.log(response);
                if (response !== null && response !== "")
                {
                    alert (response);
                } else
                {
                    alert('You have no followers.');
                }
            }
        }
        )
    })
})