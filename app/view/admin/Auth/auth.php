<div class="authUser">
    <div class="Logincontainer">
        <div class="user_input">
            <h3 style="text-align:center">Admin Login</h3>
            <h5 id="usernameInput"></h5>
            <form id="adminLoginForm" action="<?=ROOT?>auth/login" method="post">
                <label for="username">Username:</label>
                <br>
                <input type="text" name="username" placeholder="Enter Username Here" required>
                <!-- <p id="msg1"></p> -->
                <br>
                <label for="password">Password:</label>
                <br>
                <input id="passwordInput" type="password" name="password" id="password" placeholder="Enter Password" required>
                <br>
                <button type="submit" id="adminLoginBtn">LOGIN</button>
            </form>
        </div>
    </div>

</div>