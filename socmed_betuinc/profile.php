<?php include 'views/header.php'; ?>
<div class="container">
    <div class="banner">
       
<div class="container">

    <div class="banner">
        <div class="pro-pic"></div>

        <div class="banner-name">
            <?= $_SESSION['firstname']. " ".$_SESSION['lastname']; ?>
        </div>
    </div>

   
    <div class="profile-space"></div>

    <!-- 👇 NOW POSTS ARE BELOW -->
    <div class="post-container">
        <form id="post-form" action="models/add_post.php" method="POST">
            <textarea id="post-area" name="post-area" placeholder="What's on your mind?"></textarea>
            <input type='submit' id='post-button' value='post'>                   
        </form>
    </div>

    <div class='posts'>
        <?php include 'models/load_user_posts.php'; ?>
    </div>

</div>
</div>

 <?php include 'views/footer.php';