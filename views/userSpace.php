<?php
    include("header.php");
?>

<body>
  <div id="blurZone" 
     style="pointer-events: <?php echo isset($_SESSION['active']) ? 'none' :'auto'; ?>;
            filter: blur(<?php echo isset($_SESSION['blur']) ? 2 : 0; ?>px);">
          <header>
            <nav>
              <div id="logoDiv">
                  <a href="/userSpace"><img id="loginIcon" src="./assets/images/neurolink_icon.png" alt="NeuroLink logo"></a>
                  <h1>NeuroLink</h1>
              </div>   
              <div class="menu">
                <ul>
                  <li><a href="/userSpace"><img src="./assets/images/home.png" alt="Home"></a></li>
                  <li><a href="#"><img src="./assets/images/friends.png" alt="Friends"></a></li>
                </ul>
              </div>
              <div id="signout">
                <a href="/signoutUser">Sign Out</a>
              </div>
            </nav>
            
          </header>
          <main>
              <div id="pageContent">
                  <section class="column" id="leftMenu">
                  <div class="content" id="leftContent">
                    <div id="infoPerso">
                        <h3><p>User : <?php echo $_SESSION["userValid"]["username"];?></p></h3>
                    </div>
                    <div id="nbPosts">
                      <p><h3>N° Posts : <?php echo isset($_SESSION["posts"]) && is_array($_SESSION["posts"]) ? count($_SESSION["posts"]) : 0; ?></h3></p>
                    </div>
                    <div id="postBtn">
                        <form action="/post" method="post">
                            
                            <button class="btnLogin" id="btnCreatePost" name="btnCreatePost">Post</button>
                      </form>
                    </div>
                  </div>
                  </section>
                  <section class="column" id="middleMenu">
                  <div class="content " id="middelContent">
                    <?php 
                      foreach($_SESSION["posts"] as $post) : ?>

                        <div class="post">
                            <div class="titleBar">
                                <div class="postTitle"><?php echo $post["title"]; ?></div>
                                <div class="titleBarBtn">
                                  <form action="/editPost" method="post">
                                      <button name="editPost" value=<?php echo $post["id"]; ?>>&#9998;</button>
                                  </form>
                                  <form action="/deletePost" method="post">
                                      <button name="delPost" value=<?php echo $post["id"]; ?>>&#x1F5D1;</button>
                                  </form>
                                </div>
                            </div>
                            <div class="postContent"><?php echo $post["content"]; ?></div>
                            <div class="postSignature">
                                <div><?php echo User::getUserUsername($post["userId"]); ?></div>
                                <div><?php echo $post["date"]; ?></div>
                            </div>
                        </div>
                      <?php endforeach; ?>
                  </div>
                  </section>
                  <section class="column" id="rightMenu">
                  <div class="content column" id="leftContent">
                    
                  </div>
                  </section>
                  
              </div>
          </main>
  </div>
  <div id="postDiv">
         <form action="/newPost" method="post">
            <h2 id="createPost">Create a post</h2>
            <input class="loginInput" type="text" name="newPostTitle" id="newPostTitlee" placeholder="Your post title" required><br>
            <textarea class="loginInput" name="newPostContent" id="newPostContent" rows="10" cols="48" required placeholder="What would you like to share with us, <?php echo $_SESSION["userValid"]["username"];?> ?"></textarea><br><br>
            <div>
              <div>
                  <button class="btnLogin" type="submit" name="newPostBtn">Post</button>
              </div>
              <div>

              </div>
            </div>
         </form>                

  </div>                      

</body>

</html>