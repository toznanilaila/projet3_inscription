<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
</head>
<body>
    <div id="app"></div>
    <script type="text/javascript" >

      
        $.get("liste-apprenants.php", function( data ){

            var apprenants = JSON.parse(data);

            apprenants.forEach(apprenant => {

                var presentation =  $("<p></p>")
                .text(apprenant.Nom + "," + apprenant.Prenom );

               
                $("#app").append(presentation);
            });
        });

    </script>
</body>
</html>