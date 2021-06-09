<!DOCTYPE html>
    <head>
        <meta charset="utf-8"/>
        <title>Login Page</title>
        <link rel="stylesheet" href="./css/login.css">
    </head>
    <body>
        <div class="container">
            <span id="title"><h1>Hotel Reservation</h1></span>
            <div class="loginBox">
                <input type="radio" name="tab_button" id="tab_client" checked="checked">
                <label for="tab_client" class="tabLabel">CLIENT</label>
                <input type="radio" name="tab_button" id="tab_manager">
                <label for="tab_manager" class="tabLabel">MANAGER</label>

                <form id="client_loginForm" method="POST" action="loginCheck.php">
                    <span id=title><h1>LOGIN_CLI</h1></span>
                    <div class="inputField">
                        <label>ID</label><input type="text" name="input_id" placeholder="Enter your id" size="18">
                    </div>
                    <div class="inputField">
                        <label>PASSWORD</label><input type="password" name="input_pw" placeholder="Enter your password" size="18">
                    </div>
                    <button id="loginBtn" type="submit">LOG IN</button>
                    <div><label>Don't you have ID?</label><button id="signUpBtn">sign up</button></div>
                </form>

                <form id="manager_loginForm" method="POST" action="loginCheck.php">
                    <span id=title><h1>LOGIN</h1></span>
                    <div class="inputField">
                        <label>ID</label><input type="text" name="input_id" placeholder="Enter your id" size="18">
                    </div>
                    <div class="inputField">
                        <label>PASSWORD</label><input type="password" name="input_pw" placeholder="Enter your password" size="18">
                    </div>
                    <button id="loginBtn" type="submit">LOG IN</button>
                    <div><label>Don't you have ID?</label><button id="signUpBtn">sign up</button></div>
                </form>
            </div>
        </div>
        

    </body>
</html>