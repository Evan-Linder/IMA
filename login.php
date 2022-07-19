<!DOCTYPE html>

<html>

<head>

<title>EIMA Login - Inventory Management System</title> 

<link rel = "stylesheet" type="text/css" href="css/login.css">
</head>
<body id="loginBody">
<div class = "container">
    <div class = "loginHeader">
        <h1>EIMA</h1>
        <p> Evan's Inventory Management Application</p>
    </div>
    <div class = "loginBody">
        <form action = "">
            <div class="loginInputsContainer">
                <label for = "">Username</label>
             <!-- this inputs a box for a username. -->
                <input placeholder="Username" type = "text"/>
            </div>
             <!-- this inputs a box for a password and blurs the contents. -->
            <div class ="loginInputsContainer">
            <label for = "">Password</label>
            <input placeholder="Password" type = "password"/>
            </div>
            <!-- this inputs a button to initiate login -->
            <div class = "loginInputsButton">
                <input class = "loginInputs" type=button onClick="parent.location='dashboard.html'"
                value='Login'>
               
                <input class= "loginInputsButton" type=button onClick="parent.location='registration.html'"
                value='Register'>
            </div>
        </form>
   
</div>
</body>
</html>