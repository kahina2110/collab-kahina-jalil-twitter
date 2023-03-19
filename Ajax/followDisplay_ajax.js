$(function() {

    $onload(function(e) 
    {
        e.preventDefault();

        $.ajax(
        {
            type: "POST",
            url: "../Controllers/followdisplay_controller.php",
            data: data,
            success: function(response)
            {   
                if (response !== false)
                {
                    alert("success");
                } else
                {
                    alert('Error');
                }
            }
        }
        )
    })
})