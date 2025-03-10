<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            position: relative;
            max-width: 500px;
            width: 100%;
            background: #FCEDDA;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .container header {
            font-size: 1.2rem;
            color: #000;
            font-weight: 600;
            text-align: center;
        }

        .container .form {
            margin-top: 15px;
        }

        .form .input-box {
            width: 100%;
            margin-top: 10px;
        }

        .input-box label {
            color: #000;
        }

        .form :where(.input-box input, .select-box) {
            position: relative;
            height: 35px;
            width: 90%;
            outline: none;
            font-size: 1rem;
            color: #808080;
            margin-top: 5px;
            border: 1px solid #EE4E34;
            border-radius: 6px;
            padding: 0 15px;
            background: #FCEDDA;
        }

        .input-box input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .form .column {
            display: flex;
            column-gap: 15px;
        }

        .form .gender-box {
            margin-top: 10px;
        }

        .form :where(.gender-option, .gender) {
            display: flex;
            align-items: center;
            column-gap: 50px;
            flex-wrap: wrap;
        }

        .form .gender {
            column-gap: 5px;
        }

        .gender input {
            accent-color: #EE4E34;
        }

        .form :where(.gender input, .gender label) {
            cursor: pointer;
        }

        .gender label {
            color: #000;
        }

        .address :where(input, .select-box) {
            margin-top: 10px;
        }

        .select-box select {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            color: #808080;
            font-size: 1rem;
            background: #FCEDDA;
        }

        .form button {
            height: 40px;
            width: 100%;
            color: #000;
            font-size: 1rem;
            font-weight: 400;
            margin-top: 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s ease;
            background: #EE4E34;
        }

        .form button:hover {
            background: #EE3E34;
        }
    </style>
</head>

<body>
    <section class="container">
        <header>Registration Form</header>
        <form class="form" action="./users_db/registration.php" method="POST">
            <div class="input-box">
                <label>Full Name</label>
                <input id="fullname" name="fullname" required="" placeholder="Enter full name" type="text">
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input id="contact" name = "contact" required="" placeholder="Enter phone number" type="telephone">
                </div>
                <div class="input-box">
                    <label>Birth Date</label>
                    <input  id="dob" name="dob" required="" placeholder="Enter birth date" type="date">
                </div>
            </div>
            <div class="input-box address">
                <select  name ="gender">
                    <option hidden="">Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Prefer not to say</option>
                </select>
            </div>
            <div class="input-box address">
                <label>Address</label>
                <input required="" name ="addres" placeholder="Enter street address" type="text">
                <div class="column">
                    <div class="select-box">
                        <select  name ="country">
                            <option hidden="">Country</option>
                            <option>India</option>
                            <option>USA</option>
                            <option>UK</option>
                            <option>Germany</option>
                            <option>Japan</option>
                        </select>
                    </div>
                    <input required="" name = "city"placeholder="Enter your city" type="text">
                </div>
            </div>
            <div class="input-box">
                <label>Password</label>
                <input required="" name = "pass" placeholder="Enter Password" type="password">
            </div>
            <button>Submit</button>
        </form>
    </section>
</body>

</html>