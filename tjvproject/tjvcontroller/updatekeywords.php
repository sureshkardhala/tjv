<?php
include('./config.php');
$message='';
$content='';
$keywords_file = "./seofiles/keywords.txt";
$file = fopen( $keywords_file, "r" );       
if( $file == false ) {
    $content='Error in reading a file';
  }else{
    $filesize = filesize( $keywords_file );
    $content = fread( $file, $filesize );
    if($content==null){
        $content = 'No data avaliable';
    }
}
if(isset($_POST['submit'])){
    $keywords= mysqli_real_escape_string($dbconn, $_POST['keywords']);
    $myfile = fopen($keywords_file, "w") or die("Unable to open file!");
    if(fwrite($myfile, $keywords)){
        $val =True;
    }else{
        $val =False;
    }
    fclose($myfile);
    ?>
<script>
    if(<?php echo $val; ?>) {
        window.alert("Data Updated Successfully!.");
    } else{
        window.alert("Failed To Update the data.");
    }
    window.history.go(-1);
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update keywords</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../static/js/jquery.min.js"></script>
    <link rel="stylesheet" href="./static/css/index.css">
</head>
<body>
    <div class="container">
        <?php include('./components/nav.php'); ?>
        <div class="item-container">
            <div class="items-container">
                <div class="popbox">
                    <h3 class="item-title">Update SEO keywords</h3>
                    <p style="color:#00C9A7" class="id"></p>
                    <?php echo $message; ?>
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data">
                        <textarea name="keywords" id="" cols="30" rows="10" required><?php echo $content; ?></textarea>
                        <div class="buttons">
                            <input type="submit" value="Submit" name="submit" class="btn submit">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>