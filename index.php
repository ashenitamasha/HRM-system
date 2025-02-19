<!DOCTYPE html>
<html>
<head>
	<title>HRM System</title>

<style>
    body{
	margin: 0;
	padding: 0;
	display: flex;
    flex-direction: column; 
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: url(1.jpg);
    background-size: cover; 
    background-repeat: no-repeat; 
    background-position: center

}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: white;
    font-size: 2.5em;
}

.main{
	width: 350px;
    max-width: 90%; 
	height: 400px;
    max-height: 80vh;
	
	overflow: auto;
	background-color: azure;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 50px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 10px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 12px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 30px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}

/*  Media Queries for Responsiveness  */

/* Mobile view*/
@media (max-width: 576px) {
    h1 {
        font-size: 2em;
        margin-bottom: 10px; 
    }
    .main {
        width: 95%; 
        height: auto;
        max-height: 80vh;
    }
    label{
        font-size: 2em; 
        margin:30px;
    }
    input {
        width: 70%;
    }
    button{
        width: 70%;
        margin-top: 10px; 
    }
    .login{
        height: auto;
    }
    #chk:checked ~ .login{
        transform: translateY(-100px);
    }
}

/* Tablet view */
@media (min-width: 577px) and (max-width: 768px) {
    h1 {
        font-size: 2.2em;
    }
    .main {
        width: 70%;
    }
    label{
        margin: 40px;
    }
    input {
        width: 70%;
    }
     button{
         width:70%;
         margin-top: 20px;
    }
    .login{
        height: auto;
    }
    #chk:checked ~ .login{
        transform: translateY(-100px);
    }
}

/* Laptop Styles (min-width: 769px and max-width: 1024px) */
@media (min-width: 769px)  {
    h1 {
        font-size: 2.4em;
    }
    .main {
        width: 400px;
        height: 600px;
    }
     input{
        width: 65%;
    }
    button{
        width: 65%;
    }
    .login{
        height: auto;
    }
    #chk:checked ~ .login{
        transform: translateY(-100px);
    }
}

/* Large Laptop/Desktop Styles (min-width: 1025px) */
@media (min-width: 1025px) {
    h1 {
         font-size: 2.5em;
    }
    .main {
       width: 450px;
        height: 600px;
    }
    input{
        width: 65%;
    }
     button{
         width:65%;
    }
    .login{
        height: auto;
    }
    #chk:checked ~ .login{
        transform: translateY(-100px);
    }
}



</style>
</head>
<body>
<h1>Human Resource Management System</h1>
<div class="main">
    <div class="signup">
        <form action="login.php" method="POST">
            <label for="chk" aria-hidden="true" style="color: #000;">Login</label>
            <input type="text" name="username" placeholder="User name" required>
            <input type="password" name="password" placeholder="Password" required>

            <!-- Admin Login -->
            <button type="submit" name="role" value="admin">Admin</button>

            <!-- Manager Login -->
            <button type="submit" name="role" value="manager">Manager</button>

            <!-- Employee Login -->
            <button type="submit" name="role" value="employee">Employee</button>
        </form>
    </div>
</div>

<footer>
    <p>&copy; 2024 HRM System</p>
</footer>

</body>
</html>