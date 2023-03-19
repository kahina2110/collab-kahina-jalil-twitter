$(function() {

    $('#like_button').click(function(e) 
    {
        const  button = $('#like_button');
      
        e.preventDefault();
        {

            $.ajax(
            {
                type: "POST",
                url: "../Controllers/like_controller.php",
                data: button,
                success: function(response)
                {   
                    console.log(response);
                    if (response > 1)
                    {
                        alert('Tweet liked!');
                        // window.location.href = 'http://localhost/W-WEB-090-LIL-1-1-academie-marie.robertson/Views/feed_view.php';
                    } else
                    {
                            alert('Error');
                    }
                }
            })
        }
    })
})