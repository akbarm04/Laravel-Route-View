<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(https://cdn.pixabay.com/photo/2016/03/18/15/02/ufo-1265186_1280.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }


        form {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(30px);
            border-radius: 1rem;
            border: 1px solid #ccc;
            padding: 20px;
            width: 500px;
            margin: 0 auto;
            
        
        }


        h1 {
            text-align: center;
            color: #fff;
        }

        h3 {
            text-align: center;
            color: #fff;
        }

        label {
            display: contents;
            margin-bottom: 8px;
            font-family: 'Times New Roman', Times, serif;
        }
        
        p {
            font-family: 'Poppins';

        }

        input[type="text"],
        select,
        textarea {
            width: 96.5%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #cccccc;
            border-radius: 3px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        button[type="submit"] {
            background-color: #0808f5;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1 style="font-family: 'Poppins';">Buat Account Baru</h1>
    <h3 style="font-family: 'Times New Roman', Times, serif;">Sign Up Form</h3>
    <form action="{{url ('welcome')}}" method="get">
    <label for="fname" style="color: #ffffff;">First Name :</label> <br> 
    <input type="text" id="fname" name="fname" required> <br> <br>
    <label for="lname" style="color: #fff;">Last Name :</label> <br>
    <input type="text" id="lname" name="lname" required>
    <p style="color: #fff;">Gender</p>
    <input type="radio" id="male" name="gender" value="Laki-laki" required>
    <label for="male" style="color:#fff;">Male</label> <br>
    <input type="radio" id="female" name="gender" value="Perempuan" required>
    <label for="female" style="color: #fff;">Female</label>
    <p style="color: #fff;">Nationality</p>
    <select name="nationality" id="" >
        <option value="indonesian">Indonesia</option>
        <option value="american">Dengklok City</option>
        <option value="english">Johar City</option>
        <option value="english">Klari City</option>
    </select>
    <p style="color: #fff;">Language Spoken</p>
    <input type="checkbox" id="indo" name="language[]" value="Indonesia">
    <label for="indo" style="color: #fff;">Bahasa Indonesia</label> <br>
    <input type="checkbox" id="english" name="language[]" value="Inggris"> 
    <label for="english" style="color: #fff;">English Language</label> <br>
    <input type="checkbox" id="sunda" name="language[]" value="Sunda"> 
    <label for="sunda" style="color: #fff;">Basa Sunda</label> <br>
    <input type="checkbox" id="other" name="language[]"> 
    <label for="other" style="color: #fff;">Other</label>
    <p style="color: #fff;">Bio</p> 
    <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
    <button type="submit" style="font-family: 'Poppins';">Sign Up</button></a>
    </form>
</body>
</html>