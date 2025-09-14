<?php
    include("header.php");
?>
<body>
    <div id="newUserDiv">
        <div id="logoDiv">
            <img id="loginIcon" src="./assets/images/neurolink_icon.png" alt="NeuroLink logo">
            <h1>NeuroLink</h1>
        </div>
        
        <form action="/saveUser" id=loginForm method="post">
            <div id="formDiv">
                <div id="userNames">
                    <input class="loginInput" type="text" name="userSurname" id="userSurname" placeholder="Surname" pattern="^[A-Za-zÀ-ÖØ-öø-ÿ]+([ '-][A-Za-zÀ-ÖØ-öø-ÿ]+)*$" required>
                    <input class="loginInput" type="text" name="userForename" id="userForename" placeholder="Forename" pattern="^[A-Za-zÀ-ÖØ-öø-ÿ]+([ '-][A-Za-zÀ-ÖØ-öø-ÿ]+)*$" required>
                </div>
                <div id="userEmail">
                    <input class="loginInput" type="email" name="userEmail" id="userEmail" placeholder="Email address" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                </div>
                <div id="userAlias">
                 <small id="dobHelpBlock">Date of birth</small>
                <input class="loginInput" type="date" name="userDOB" id="userDOB" placeholder="Date of birth" required>
                   
                    <input class="loginInput" type="text" name="userUsername" id="userUsername" placeholder="Username" required>
                </div>
                <div id="userPassword">
                    <input class="loginInput" type="text" name="userPassword" id="userPassword" placeholder="Password" required>
                    <input class="loginInput" type="text" name="userConfirmPassword" id="userConfirmPassword" placeholder="Confirm password" required>
                </div>
                <div id="userBtns">
                        
                        <button class="btnLogin" id="btnSaveUser" type="submit" name='btnSaveUser'>Submit</button>
                        
                        
                       
                                <button class="btnLogin" id="btnCancelUser" type="submit" name='btnCancelUser' formnovalidate>Cancel</button>
                        
                </div>
            </div>
        </form>
    </div>
    <form action="/error" method="post">
        <div class="alert" style="display:<?php echo isset($_SESSION["displayError"]) ? $_SESSION["displayError"] : 'none'; ?>;">
            <h3><?php  echo $_SESSION["displayErrorMessage"] ?></h3>
            <div id="okDiv">
                <button class="btnLogin" id="btnOKi" name="btnOKi">OK</button>
            </div>
        </div>
    </form>
</body>

</html>