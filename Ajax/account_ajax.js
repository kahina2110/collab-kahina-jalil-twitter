
    $(document).ready(function() 

    {
        const text = document.getElementById("#text")// logout buttons
        // e.preventDefault();

        $.ajax(
        {
            type: "POST",
            url: "../Controllers/account_controller.php",
            data: {text:text},

            success: function(response)
            {   
                if (response = "success")
                {
                    alert ('Welcome on twist')
                    
                    // window.location.href = '../Views/account_view.php';
                } else
                {
                        alert('Error');
                }
            }
        }
        )
    })