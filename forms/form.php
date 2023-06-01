<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- <form method="post" action="process_form.php">

        <select name="country">
        <optgroup label="Europe">
            <option value="germany" disabled>Germany</option>
            <option value="france">France</option>
            <option value="uk" selected>United Kingdom</option>
        </optgroup>
        <optgroup label="America">
            <option value="brazil">Brazil</option>
            <option value="canada">Canada</option>
            <option value="usa">United States</option>
        </optgroup>
    </select>

    <button>Send</button>

    </form>

    <form method="post">
        <fieldset>
            <legend>Article</legend>
            <div>
                <label>Title:<input type="text" name="title" placeholder="Article title" readonly></label>
            </div>

            <div>
               <label>Content: <textarea autofocus name="conten" cols="40" rows="4" placeholder="Content"></textarea></label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Attributes</legend>
            <div>
                <label><input type="checkbox" name="visible" value="yes" id="visible">Visible</label> 
            </div>
        </fieldset>

        <fieldset>
            <legend>Colour</legend>
            <div>
                <label> <input type="radio" name="colour" value="blue" checked>Blue</label><br>
                <label> <input type="radio" name="colour" value="red">Red</label><br>
                <label> <input type="radio" name="colour" value="green">Green</label>
            </div>
        </fieldset>

        <button>Send</button>

</form>  -->
<!-- ---------------------------------------------------------------- -->
<!-- Validate input -->

<form method="post" novalidate>

    <div>
        postcode: <input name="postcode"
        pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}"
        title="Please enter a valid UK postcode">
    </div>

    <div>
        email: <input type="email" name="email" required>
    </div>

    <div>
        url: <input type="url" name="url">
    </div>

    <div>
        number: <input type="number" name="count" min="1" max="10">
    </div>

    <button>Send</button>

</form>


</body>
</html> 