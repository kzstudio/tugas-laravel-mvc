<html>
    <head>
        <title>Buat Account Baru!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h4>Sign Up Form</h4>
        
        <form action="<?php echo url('/welcome'); ?>" method="POST">
            @csrf
            <p><label for="first_name">First name:</label></p>
            <input type="text" id="first_name" name="first_name">

            <p><label for="last_name">Last name:</label></p>
            <input type="text" id="last_name" name="last_name">

            <p><label>Gender:</label></p>
            <input type="radio" name="gender" value="male"> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other<br>
            
            <p><label>Nationality:</label></p>
            <select name="nationality">
                <option value="indonesian">Indonesian</option>
                <option value="bahasa_luar">Bahasa Luar</option>
            </select>
            
            <p><label>Language Spoken:</label></p>
            <input type="checkbox" name="bahasa" value="bahasa_indonesia"> Bahasa Indonesia<br>
            <input type="checkbox" name="bahasa" value="english"> English<br>
            <input type="checkbox" name="bahasa" value="other"> Other<br>
            
            <p><label>Bio:</label></p>
            <textarea cols="25" rows="7"></textarea><br>
            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>
