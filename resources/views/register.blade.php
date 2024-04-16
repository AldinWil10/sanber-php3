<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <a href="/">kembali ke home</a>
    <h2>Sign Up Form</h2>

    <form action="/welcome" method="POST">
        @csrf
    <label>First Name:</label><br>
    <input type="text" name="fname" placeholder="Your First Name"><br>  
    <label>Last Name:</label><br>
    <input type="text" name="lname" placeholder="Your Last Name"><br><br>

    <label>Gender:</label><br>
    <label>
        <input type="radio" name="gender" id="male">
        Male
    </label><br>
    <label>
        <input type="radio" name="gender" id="female">
        Female
    </label><br><br>
    <label>Language Speak:</label><br>
        <input type="checkbox" name="language" id="ina"/><label for="ina">Indonesia</label><br/>
        <input type="checkbox" name="language" id="eng"/><label for="eng">English</label><br/>
        <input type="checkbox" name="language" id="arb"/><label for="arb">Arabic</label><br/>
        <input type="checkbox" name="language" id="jpn"/><label for="jpn">Japanese</label><br/>
    <br>
    <label>Bio:</label><br>
    <textarea  id="bio" rows="5" cols="33"></textarea><br>
    <input type="submit" value="Sign Up">
    </form>
</body>
</html>