$(function() {

    $('#users_profile').click(function(e) 
    {
        const button = $('#users__profile')
        e.preventDefault();

        $.ajax(
        {
            type: "POST",
            url: "../Controllers/usersprofile_controller.php",
            data: button.serialize(),
            success: function(response)
            {   
                if (response !== false)
                {
                    window.location.href = '../Views/users_profile_view.php';
                } else
                {
                        alert('Error');
                }
            }
        }
        )
    })
})