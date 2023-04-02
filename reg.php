<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
 <h1>Registration Page</h1>   
<a href="landpage.php">Return to Home Page</a>
<div>
</div>
</body>
<form action="database_conn.php" method="POST">
        <table>
            <tr>
                <td>
                    ID:
                </td>
                <td>
                    <input type="text" placeholder="123" ID="" name="id">
                </td>
                <tr></tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" placeholder="@ Email.com" name="email">
                </td>
                <tr></tr>
                <td>
                   Password: 
                </td>
                <td>
                    <input type="text" password="" name="password">
                </td>
                <tr></tr>
                <td>
                    First Name:
                </td>
                <td>
                    <input type="text" firstName="" name="firstName">
                </td>
                <tr></tr>
                <td>
                  Last Name:  
                </td>
                <td>
                    <input type="text" lastName="" name="lastName">
                </td>
                <tr></tr>
                <td>
                    Address:
                </td>
                <td>
                    <input type="text" address="" name="address">
                </td>
                <tr></tr>
                <td>
                    Phone:
                </td>
                <td>
                   
                <input type="Phone" placeholder="1234567" phone="" name="phone">
                <tr></tr>
                <td>
                     SSN:
                </td>
                <td>
                    <input type="text" SSN=""name="SSN">
                </td>
                 <tr></tr>
                <td>
                    Major Field of Study:
                </td>
                <td>
                    <input type="text" major="" name="major">
                 </td>
                <tr></tr>
                <td>
                <input type="Submit" value="Submit" submitbutton="">
                </td>
                </td>
            </tr>

        </table>
    </form>
</body> 
</body>
</html>