$(function () {

    $('#edit__button').click(function (e) {
        const form = $('#edit__form')
        e.preventDefault();

        $.ajax(
            {
                type: "POST",
                url: "../Controllers/edit_account_controller.php",
                data: form.serialize(),
                success: function (response) {
                    if (response = 'success') {
                        alert('Modifications saved.');
                        window.location.href = '../Views/edit_account_view.php';
                    } else {
                        alert('Error');
                    }
                }
            }
        )
    })
})