<link rel="stylesheet" href="./static/css/nav.css">
<div class="nav">
    <h2 class="title">Telangana Jana Vedika</h2>
    <div class="login">
        <label><input type="checkbox" name="content" class="chb"><p><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Suresh Kardhala&nbsp;<i class="fa-sharp fa-solid fa-caret-down"></i></p></label>
        <div class="list">
            <p class="email">sureshkardhdddala2k22@gmail.com</p>
            <a class="email logout" href="#">Logout&nbsp;&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>
</div>
<script>
    $('.chb').on('click', function (params) {
        var x = $(this).is(':checked');
        if(x){
            $(".list").show();

        }else{
            $(".list").hide();
        }
    });
</script>