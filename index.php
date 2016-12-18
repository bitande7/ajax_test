<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
<body>


<div class="row">
    <div class="col-md-6 col-md-offset-3">

            <div class="form-group">
                <label for="m_name">Method name</label>
                    <select class="form-control" id="m_name" name="m_name">
                        <option>first_way</option>
                        <option>second_way</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="param1">Param 1</label>
                <input type="number" id="param1" name="param1">
                <br>
                <label for="param2">Param 2</label>
                <input type="number" id="param2" name="param2">
                <br>
                <label for="param3">Param 3</label>
                <input type="number" id="param3" name="param3">
            </div>
            <button class="btn btn-default" id="submit">Submit</button>

    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-6 col-md-offset-3" id="result">
    <p id="result">333</p>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>

    $(function() {

        $('#submit').on('click', function () {


            var data = 'm_name='+ $("#m_name option:selected").text() +
                '&param1=' + $('#param1').val() +
                '&param2=' + $('#param2').val() +
                '&param3=' + $('#param3').val();


            $.ajax({
                type: "POST",
                url: "ajax_class.php",

                // данные, которые будут отправлятся на сервер с запросом
                data: data,

                success: function (data) {
                    $('#result').text(data);
                   console.log(data);
                }
            });

        });


    });


</script>
</body>
</html>