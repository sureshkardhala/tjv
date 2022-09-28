<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Admin Module</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./static/css/index.css">
    <script src="../static/js/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <?php include('./components/nav.php');?>
        <div class="item-container top">
            <div class="items-container">
                <h3 class="item-title">Publications & Blogs</h3>
                <div class="itemlist">
                    <div class="item one"><a href="uploadpost.php" target="_blank"><h3>Upload Publications &nbsp;<i class="fa-solid fa-cloud-arrow-up"></i></h3></a></div>
                    <div class="item two"><a href="viewresults.php?src=<?php echo base64_encode('publications');?>" target="_blank"><h3>View All Publications &nbsp;<i class="fa-solid fa-eye"></i></h3></a></div>
                </div>
                <div class="itemlist">
                    <div class="item one"><a href="uploadpost.php" target="_blank"><h3>Upload Blogs &nbsp;<i class="fa-solid fa-upload"></i></h3></a></div>
                    <div class="item two"><a href="viewresults.php?src=<?php echo base64_encode('blogs');?>" target="_blank"><h3>View All Blogs &nbsp;<i class="fa-solid fa-blog"></i></h3></a></div>
                </div>
            </div>
            <div class="items-container">
                <h3 class="item-title">Events</h3>
                <div class="itemlist">
                    <div class="item one"><a href="uploadevent.php" target="_blank"><h3>Upload Meetings &nbsp;<i class="fa-solid fa-cloud-arrow-up"></i></h3></a></div>
                    <div class="item two"><a href="viewresults.php?src=<?php echo base64_encode('meetings');?>" target="_blank"><h3>View All Meetings &nbsp;<i class="fa-solid fa-eye"></i></h3></a></div>
                </div>
                <div class="itemlist">
                    <div class="item one"><a href="uploadevent.php" target="_blank"><h3>Upload Seminars &nbsp;<i class="fa-solid fa-upload"></i></h3></a></div>
                    <div class="item two"><a href="viewresults.php?src=<?php echo base64_encode('seminars');?>" target="_blank"><h3>View All Seminars &nbsp;<i class="fa-solid fa-blog"></i></h3></a></div>
                </div>
                <div class="itemlist">
                    <div class="item one"><a href="uploadevent.php" target="_blank"><h3>Upload Webinars &nbsp;<i class="fa-solid fa-cloud-arrow-up"></i></h3></a></div>
                    <div class="item two"><a href="viewresults.php?src=<?php echo base64_encode('webinars');?>" target="_blank"><h3>View All Webinars &nbsp;<i class="fa-solid fa-handshake-simple"></i></h3></a></div>
                </div>
            </div>
            <div class="items-container">
                <h3 class="item-title">SEO Description & Keywords</h3>
                <div class="itemlist">
                    <div class="item one"><a href="updatedescription.php" target="_blank"><h3>Update Description &nbsp;<i class="fa-solid fa-cloud-arrow-up"></i></h3></a></div>
                    <div class="item two"><a href="updatekeywords.php" target="_blank"><h3>Update Keywords &nbsp;<i class="fa-solid fa-eye"></i></h3></a></div>
                </div>
            </div>
            <div class="items-container">
                <h3 class="item-title">User & Authors Management</h3>
                <div class="itemlist">
                    <div class="item one"><a href="registernewuser.php" target="_blank"><h3>Create New Users &nbsp;<i class="fa-solid fa-plus"></i></i></h3></a></div>
                    <div class="item two"><a href="viewresults.php?src=<?php echo base64_encode('users');?>" target="_blank"><h3>View & Maintain Users &nbsp;<i class="fa-sharp fa-solid fa-people-roof"></i></h3></a></div>
                </div>
                <div class="itemlist">
                    <div class="item one"><a href="uploadauthor.php" target="_blank"><h3>Upload Authors &nbsp;<i class="fa-solid fa-cloud-arrow-up"></i></a></h3></div>
                    <div class="item two"><a href="viewresults.php?src=<?php echo base64_encode('authors');?>" target="_blank"><h3>View All Authors &nbsp;<i class="fa-solid fa-users"></i></h3></a></div>
                </div>
            </div>
            <div class="items-container">
                <h3 class="item-title">Join with is & Contact Details</h3>
                <div class="itemlist">
                    <div class="item one"><a href="viewresults.php?src=<?php echo base64_encode('joinus');?>" target="_blank"><h3>View Registrations&nbsp;<i class="fa-solid fa-address-card"></i></h3></a></div>
                    <div class="item two"><a href="viewresults.php?src=<?php echo base64_encode('contact');?>" target="_blank"><h3>View Contact Details &nbsp;<i class="fa-sharp fa-solid fa-registered"></i></h3></a></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>