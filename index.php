<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Parallax</title>
</head>
<body>
<section id="my-background">
<!--     <img src="images/ls5.png" alt="" id="base1">

    <img src="images/ls.png" alt="" id="base2"> -->

<div class="wrapper">

        <div id="btnProject" class="subwrap a">
            <h3 class="rubric">PROJETS</h3>
            <div id="displayProject"></div>
        </div>



        <div id="btnAbout" class="subwrap b">
            <h3 class="rubric">À PROPOS</h3>
            <div id="displayAbout"></div>
        </div>


</div>


    <h2 id="text">&nbsp;&nbsp;&nbsp;</h2>
    <h2 id="text1"></h2>
    <h2 id="text2"></h2>

    <div id="parallax"></div>
    <div class="contact">
        <h3>CONTACT</h3>
    </div>


    
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@0.5.21/dist/vanta.clouds.min.js"></script>
<script>
  VANTA.CLOUDS({el :'#my-background',
    cloudColor: 0x888d98,
    cloudShadowColor: 0xffffff,
    speed: 1.50
  })
</script>



<!--     <div class="second">
        <p></p>
        <h1 id="PTF">PORTFOLIO</h1>
    </div> -->


<!--     <button id="button" class="bt">
        BUTTONTESTCLIC
    </button>

    <div id="divtest">

        <h1>OK LETS TRY SOMETHING MACHINCHOSE</h1>
        
    </div> -->


<script src="main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
                $(document).ready(function(){
                $("#btnProject").click(function(){
                    $("#displayProject").load("ajax-cont.php").slideToggle(1500);
                });
                });
        </script>
        <script>
            $(document).ready(function(){
                $("#btnAbout").click(function(){
                    $("#displayAbout").load("ajax-cont.php").slideToggle(1500);
                });
            }
            );
        </script>
</body>
</html>

