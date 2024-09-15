<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        *{
            box-sizing:border-box;
            padding:0;
            margin:0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            padding: 2rem;
        }

        .container {
            background-color: #fff;
            width: 100%;
            max-width: 600px;
            /* padding: 0 2rem 2rem 2rem; */
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
    background-color: #f1f1f1;
    padding: 1rem;
    border-radius: 8px  8px  0  0 ;
    margin-bottom: 2rem;
    text-align: center;
    width: 100%; 
   
}

.header h2 {
    margin: 0; 
    font-size: 1.8rem;
    font-weight: bold;
}

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            font-size: 1.2rem;
            display: block;
            margin-bottom: 0.5rem;
        }

        input[type="text"], input[type="email"],select{
            width: 100%;
            padding: 0.75rem;
            font-size: 1rem;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
       

        .gender, .hobbies {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        

        .btn-group {
            display: flex;
            justify-content: flex-start;

            gap: 1rem;
            margin-top: 1.5rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 4px;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .alert {
            margin-top: 2rem;
            padding: 1.25rem;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            font-size: 1rem;
        }

        .alert p {
            margin: 0.5rem 0;
        }

        /* Align the radio buttons horizontally */
        .gender {
            gap: 10px;
        }
        .gender label {
            margin: 0 10px 0 0;
        }

        /* Align checkboxes */
        .hobbies label {
            margin: 0 15px 0 0;
        }

       
         .btn-group {
            display: flex;
            justify-content: flex-start;
        } 
       form{
        padding: 2rem;
       }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>Registration Form</h2>
        </div>

        <!-- Form -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="firstName">First name</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last name</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group gender">
                <label>Gender</label>
                <label for="male">
                    <input type="radio" id="male" name="gender" value="male" required> Male
                </label>
                <label for="female">
                    <input type="radio" id="female" name="gender" value="female"> Female
                </label>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <select id="state" name="state" required>
                    <option value="Johor">Johor</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Penang">Penang</option>
                </select>
            </div>
            <div class="form-group hobbies">
                <label>Hobbies</label>
                <label for="badminton">
                    <input type="checkbox" id="badminton" name="hobbies[]" value="Badminton"> Badminton
                </label>
                <label for="football">
                    <input type="checkbox" id="football" name="hobbies[]" value="Football"> Football
                </label>
                <label for="bicycle">
                    <input type="checkbox" id="bicycle" name="hobbies[]" value="Bicycle"> Bicycle
                </label>
            </div>
            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Save record</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : '';
            $lastName = isset($_POST['lastName']) ? htmlspecialchars($_POST['lastName']) : '';
            $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
            $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
            $state = isset($_POST['state']) ? htmlspecialchars($_POST['state']) : '';
            $hobbies = isset($_POST['hobbies']) ? implode(', ', $_POST['hobbies']) : '';

            if( $firstName != '' && $lastName != '' && $email !== '' &&  $gender !== '' && $state !== '') {
                echo "<div class='alert'>";
                echo "<p><strong>First name:</strong> $firstName</p>";
                echo "<p><strong>Last name:</strong> $lastName</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Gender:</strong> $gender</p>";
                echo "<p><strong>State:</strong> $state</p>";
                echo "<p><strong>Hobbies:</strong> $hobbies</p>";
                echo "</div>";
            }
        }
        ?>
    </div>

</body>
</html>
