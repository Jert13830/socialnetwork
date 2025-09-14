<?php
    include("header.php");
?>
<body>
    <div id=loginDiv>
        <div id="logoDiv">
            <img id="loginIcon" src="./assets/images/neurolink_icon.png" alt="NeuroLink logo">
            <h1>NeuroLink</h1>
        </div>   
            <form id=loginForm action="/checkUser" method="post">
            <div id="formDiv">
                <input class="loginInput" type="text" name="loginName" id="loginName" placeholder="Username or Email address" required>
                <input class="loginInput" type="text" name="loginPassword" id="loginPassword" placeholder="Enter Password" required>
                <div id="linkDiv">
                    <a href="#">Forgotten Password</a><span id="divider"> | </span><a href="/createUser">Create account</a>
                </div>
                <button class="btnLogin" type="submit" name="loginUser">Login</button>
            </div>
        </form>
    </div>
    <form action="/error" method="post">
        <div class="alert" style="display:<?php echo isset($_SESSION["displayError"]) ? $_SESSION["displayError"] : 'none'; ?>;">
            <h3>User does not exist</h3>
            <div id="okDiv">
                <button class="btnLogin" id="btnOK" name="btnOK">OK</button>
            </div>
        </div>
    </form>
</body>

</html>