<!DOCTYPE html>
<html>
<head>
    <title>CakePHP Autocomplete Textbox with jQuery Ajax</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style type="text/css">
        .box {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <p style="padding:20px;"><h3 align="center">CakePHP Autocomplete Textbox with jQuery Ajax</h3></p>
    <div class="container box">
        <div class="form-group">
            <?= $this->Form->text('country_name', ['id' => 'country_name', 'class' => 'form-control', 'placeholder' => 'Enter Country Name']) ?>
            <div id="countryList"></div>
        </div>
        <?= $this->Form->csrf('csrfToken') ?>
    </div>
    <script>
        $(document).ready(function() {
            $('#country_name').keyup(function() {
                var query = $(this).val();
                if (query != '') {
                    var _token = $('input[name="csrfToken"]').val();
                    $.ajax({
                        
    url: "<?= $this->Url->build(['controller' => 'Autocomplete', 'action' => 'fetch']) ?>",
    method: "POST",
    data: { query: query, csrfToken: _token },
    success: function(data) {
        $('#countryList').fadeIn();
        $('#countryList').html(data);
    }
});
                }
            });

            $(document).on('click', 'li', function() {
                $('#country_name').val($(this).text());
                $('#countryList').fadeOut();
            });
        });
    </script>
</body>
</html>