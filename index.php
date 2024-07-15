<?php include 'db_config.php'; ?>

<!DOCTYPE>
<html>
    <head>
        <title>GSFC University Admission Portal</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Apply for Admission @ <a href="https://www.gsfcuniversity.ac.in/">GSFCU</a></h2>
        <div class="logo"><a href="https://www.gsfcuniversity.ac.in/"><img src="gsfc logo.png" alt="GSFCU logo"></a></div>
        <form action="submit_application.php" method="post">
            <table>
            <tr>
            <td><label for="name">Name</label></td>
            <td><input type="text" id="name" name="name" placeholder="Enter name here" required></td>
            </tr>
            <tr>
            <td><label for="email">Email</label></td>
            <td><input type="email" id="email" name="email" placeholder="Enter Email here" required></td>
            </tr>
            <tr>
            <td><label for="phone">Phone No.</label></td>
            <td><input type="number" id="phone" name="phone" placeholder="Enter phone no." required></td>
            </tr>
            <tr>
            <td><label for="address">Address</label></td>
            <td><textarea id="address" name="address" rows="4" cols="50" placeholder="Enter Address here" required></textarea></td>
            </tr>
            <tr>
            <td><label for="applied_program">Programme interested</label></td>
            <td><select name="applied_program" id="applied_program" required>
                <option value="">Select Programme</option>
                <option value="B.Tech. CSE">B.Tech. CSE</option>
                <option value="B.Tech. Chemical">B.Tech. Chemical</option>
                <option value="B.Tech. FEHS">B.Tech. FEHS</option>
                <option value="B.Sc. Chemistry">B.Sc. Chemistry</option>
                <option value="B.Sc. Microbiology">B.Sc. Microbiology</option>
                <option value="BCA">BCA</option>
            </select></td>
            </tr>
            <tr>
            <td><td><input type="submit" value="Submit Application"><td></td>
            </tr>
            </table>
        </form>
    </body>
</html>