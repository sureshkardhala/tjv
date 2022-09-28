<div class="nav-section">
            <div class="logo">
                   <img src="./static/logo/web-logo.png" alt="">
            </div>
            <div class="short-info">
                <div class="caption">
                    <div class="motto">
                        <h2>Public Policy.  Research.  Analysis.</h2>
                    </div>
                    <div class="search-box">
                        <form action="search.php" method="POST" class="search-form">
                            <input type="text" name="search" placeholder="Search..." class="input"  required/>
                            <button type="submit" class="btn" value="search" style="border:none; background:none;" ><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="empty"></div>
                </div>
                <div class="nav-bar">
                    <div class="nav-items">
                        <label><input type="checkbox" name="content" class="navc" data-content="whoweare">Who We Are &nbsp; &nbsp; &nbsp;  <i class="fa-solid fa-caret-down"></i></label>
                        <label><input type="checkbox" name="content" class="navc" data-content="events">Events &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; <i class="fa-solid fa-caret-down"></i></label>
                        <label><input type="checkbox" name="content" class="navc" data-content="academicactivity">Academic Activity <i class="fa-solid fa-caret-down"></i></label>
                        <label><input type="checkbox" name="content" class="navc" data-content="topicscovered">Topics Covered &nbsp; &nbsp;<i class="fa-solid fa-caret-down"></i></label>
                        <label><input type="checkbox" name="content" class="navc" data-content="joinournetwork">Join Our Network  &nbsp;<i class="fa-solid fa-caret-down"></i></label>
                    </div>
                </div>
            </div>
</div>
<div class="nav-container"></div>
<?php include('mob-nav.php'); ?>