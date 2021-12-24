<?php
if (!empty($_GET['url']))
{
  $url=$_GET['url']; ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <noscript>
      <meta http-equiv="refresh" content="30;url=<?php echo $url; ?>" />
    </noscript>
    <title>Yönlendiriliyorsun</title>
  </head>
<!---style--->
<style>
body {
        background: #ffffff;
	      background: -webkit-linear-gradient(to right, #7c16ff, #005298, #0089ff);
	      background: linear-gradient(to right, #7c16ff, #005298, #0089ff);
        margin: 0;
        padding: 0;
        font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    div {
        width: 600px;
        margin: 15em auto;
        padding: 2em;
        background-color: #fdfdff;
        border-radius: 0.5em;
        box-shadow: 2px 3px 7px 2px rgba(0,0,0,0.02);
    }

    @media (max-width: 700px) {
        div {
          width: fit-Content;
        }
    }

    .button {
         background-color: #1c87c9;
         border-radius: 1px;
         border: none;
         color: white;
         padding: 4px 4px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin:13px 1px;
         cursor: pointer;
         }

         .saniye{
             color: Green;
             font-size: 25px;
             font-weight:bold;
         }
    </style>
<!---style--->
        <body>
         <div>
           <center> <h1>Bu siteden ayrılıyorsun</h1></center>
            <hr/>
           <center><br>
              <strong><p><font color="red"> <?php $parse = parse_url($url); echo $parse['host']; ?></font> sitesine yönlendiriliyorsun.</p></strong><br>
              <span class="saniye" id="seconds">10</span>
              <p id="yonlendirme"> Saniye sonra yönlendirileceksin.</p>
              <a href="<?php echo $url ?>" rel="nofollow"><input class="btn btn-success" type="submit" id="submitButton" disabled="disabled"/></a>
           </center>
         </div>
        </body>
        <script>
        var sure = 10;
        window.onload = main();
        function main() {
        document.getElementById('submitButton').style.display = "none";
        say();
        }
        function say() {
        setTimeout(function() {
        if (sure <= 0) {
        document.getElementById('submitButton').disabled = null;
        document.getElementById('submitButton').value = 'Yönlendir';
        document.getElementById('submitButton').style.display = "";
        document.getElementById('seconds').style.display = "none";
        document.getElementById('yonlendirme').style.display = "none";
        } else {
        sure--;
        document.getElementById('seconds').innerHTML = sure;
        say();
        }
        }, 1000);
        }
        </script>
</html>
<?php }else{
}

?>
