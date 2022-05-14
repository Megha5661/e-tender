<?php
include ("formin.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online E-Tender>>Apply</title>
    <link rel="stylesheet" href="form.css">
    <script src="js/form.js"></script>
</head>

<body>
    <div class="main">
        <div class="opac">
            <div class="header">
                <div class="logo">
                    <img src="Images/logo.png" alt="national emblem" width="80px" height="80px">
                </div>
                <div class="content">
                    <h3>Welcome to Uttar Pradesh <br>E-tender</h3>
                </div>
                <div class="menu">
                    <ul class="menuitems">
                        <li><a href="index.html" class="nava">Home</a></li>
                        <li><a href="about.html" class="nava"> About Us</a></li>
                        <li><a href="contact.html" class="nava">Contact</a></li>
                        <li><a href="apply.html" class="nava">Apply</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="forms">
            <form action="form.php" method="POST" action="" name="register" onSubmit="formValidation();">
                <div class="tableout">
                    <table cellspacing="30px" width="900px">
                        <tr>
                            <td><label for="cname">Company Name</label></td>
                            <td><input type="text" name="cname" id="cname" required></td>
                        </tr>
                        <tr>
                            <td><label for="oname">Owner Name</label></td>
                            <td><input type="text" name="oname" id="oname" required></td>
                        </tr>
                        <tr>
                            <td><label for="mno">Mobile Number</label></td>
                            <td><input type="phone" name="mno" id="mno" required placeholder="Ex - 1234567891"></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email Id</label></td>
                            <td><input type="email" name="email" id="email" required></td>
                        </tr>
                        <tr>
                            <td><label for="add">Registered Address</label></td>
                            <td><textarea name="add" id="add" rows="2" cols="20" required></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="pno">PAN Number</label>
                            </td>
                            <td><input type="text" name="pno" id="pno" required placeholder="Ex - KDKPKG03D"></td>
                        </tr>
                        <tr>
                            <td><label for="tno">TIN Number</label></td>
                            <td><input type="text" name="tno" id="tno" required placeholder="Ex- A1G35TzIn7911"></td>
                        </tr>
                        <tr>
                            <td><label for="ano">Adhar Number</label></td>
                            <td><input type="text" name="ano" id="ano" required placeholder="Ex - 1234567891101"></td>
                        </tr>
                        <tr>
                            <td><label for="tover">Turn Over</label></td>
                            <td><input type="text" name="tover" id="tover" required placeholder="In Crores"></td>
                        </tr>
                        <tr>
                            <td> <label for="pname">Project Selected</label></td>
                            <td><select name="pname" id="pname" required>
                                       <option value="none">--Select--</option>
                                       <option value="Housing Project In Jhansi">Housing Project In Jhansi</option>
                                       <option value="Develop Housing Project In Agra">Develop Housing Project In Agra</option>
                                       <option value="Development Of Airport In Fatehpur.">Development Of Airport In Fatehpur.</option>
                                    </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="exp">Experience</label></td>
                            <td><input type="number" name="exp" id="exp" required placeholder="In Years"></td>
                        </tr>
                        <tr>
                            <td><label for="bprice">Bidding Price</label></td>
                            <td><input type="number" name="bprice" id="bprice" required></td>
                        </tr>
                        <tr>
                            <td><button type="reset" class="b">Clear</button></td>
                            <td><button type="submit" class="b">Submit</button></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <div class="footer">
            Contents owned and maintained by concerned Departments in coordination with Finance Department and Information Technology Department, Government of Uttar Pradesh
        </div>
    </div>
</body>

</html>