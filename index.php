<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Parallax</title>
</head>
<body>
<section id="my-background">
<!--     <img src="images/ls5.png" alt="" id="base1">

    <img src="images/ls.png" alt="" id="base2"> -->




    <h2 id="text">&nbsp;&nbsp;&nbsp;</h2>
    <h2 id="text1">SUR</h2>
    <h2 id="text2">MON</h2>

    <div id="parallax"></div>


    
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@0.5.21/dist/vanta.clouds.min.js"></script>
<script>
  VANTA.CLOUDS('#my-background')
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
                $("button").click(function(){
                    $("#divtest").load("ajaxtest.php");
                });
                });
        </script>
</body>
</html>

