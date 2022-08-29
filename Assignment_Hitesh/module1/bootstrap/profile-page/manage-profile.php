<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link  rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        .button 
        {   
            border: none;
            color: white;
            padding: 4px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin: 4px 109px;
            cursor: pointer;
            background-color: #752160;
        }
        .input1
        {
            width: 40%;
            padding: 1px 5px;
            margin: 0px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }
        .input2
        {
            width: 81%;
            padding: 1px 5px;
            margin: 0px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }
    </style>
    
</head>
<body>
<form>
    <div class="container bg-white p-5 mt-5 shadow-lg">
        <div class="row">
            <div class="col-md-3">
                <img src="images/h3.jpg" class="rounded-circle w-75 ml-5 mx-auto" style="margin-left: 12% !important">
                <br>
                <p class="text-center"><b>Hitesh Joshi</b></p>
                <p class="text-center">hiteshjoshi900@gmail.com</p>
            </div>
            
            <div class="col-md-5 shadow">
                <h5 class="p-4">Profile Setting</h5>
                <pre>Name                    Surname</pre>
                <input type="text" name="fname" class="input1" placeholder="First Name">
                <input type="text" name="fname" class="input1" placeholder="Surname">

                <br><label>Phone Number </label><br>
                <input type="number" class="input2" name="pnumber" placeholder="Enter Phone Number">

                <br><label>Address</label><br>
                <input type="text" name="Address" class="input2" placeholder="Enter Address">

                <br><label>Email ID</label><br>
                <input type="email" name="Email" class="input2" placeholder="Enter Email ID">

                <br><label>Education</label><br>
                <input type="text" name="Education" class="input2" placeholder="Education">

                <pre>Country                 State/Region</pre>
                <input type="text" name="Country" class="input1" placeholder="Country">
                <input type="text" name="Region" class="input1" placeholder="State">

                <br><br>
                <button class="button">Save Profile</button>
            </div>
            <div class="col-md-4 shadow">
                <h6 class="p-4">Edit-Experience</h6>
            
                <label>Experience Designing</label>
                <input type="text" name="edsng" class="input2" placeholder="Experience">
                <label>Additional details</label>
                <input type="text" name="Additional" class="input2" placeholder="Additional">
            </div>
        </div>

    </div>
</form>
</body>
</html>