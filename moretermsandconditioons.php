<?php
    include './src/application.php';
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        
        <div id="header">
            
            <div id="slogan">
                
                <?php  slogan(); ?>
                
            </div>
            
            <div id="top--navigation">
                <ul>
                    <?php main_menu();?>
                </ul>
            </div>
        </div>
        
        <div id="wrapper">
            <div id="body">
                
                <?php if(!is_user_loged_in()): ?>
                
                <div class="terms-and-conditions">

                    <?php

                        if (isset($_POST['terms'])) {
                            $terms = $_POST['terms'];

                            if ($terms == "first-terms") {
                                echo "<h1>Terms 1</h1>";
                                echo  "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse commodo maximus tellus sit amet venenatis. Mauris egestas turpis non scelerisque tincidunt. Sed tristique lectus ut aliquet fringilla. Mauris id justo vel felis auctor ultricies. Vivamus sem nisl, semper vitae risus sit amet, dictum blandit urna. Nulla suscipit vel dui a tincidunt. Ut volutpat luctus cursus. Curabitur vitae purus vitae nulla cursus ultricies in quis ex. Vestibulum quis orci venenatis, pharetra lorem sit amet, bibendum felis. Ut ornare, risus vel tempor sagittis, ligula eros tristique metus, sed rutrum sem augue et lacus. Maecenas nec felis gravida, fringilla dolor et, tincidunt mauris. Suspendisse sagittis tortor sed nulla convallis, in venenatis ex pellentesque. Maecenas luctus hendrerit ipsum ac suscipit. Mauris mattis, sapien sit amet hendrerit gravida, urna odio sollicitudin elit, sit amet congue felis odio non sem.</p>";
                            } elseif ($terms == "second-terms") {
                                echo  "<h1>Terms 2</h1>";
                                echo  "<p>Maecenas eget nisi ut ipsum rhoncus consequat. In nunc urna, luctus quis urna eu, porttitor efficitur eros. Vestibulum in lectus faucibus, varius ipsum non, tempus dui. Nam interdum malesuada urna in feugiat. Duis diam leo, aliquet id gravida id, tempus vel nunc. Nunc semper tempus arcu, ac euismod eros ullamcorper non. Maecenas euismod felis nec nibh tincidunt, in efficitur massa venenatis</p>";
                            } elseif ($terms == "third-terms") {
                                echo  "<h1>Terms 3</h1>";
                                echo "<p>Suspendisse potenti. Praesent luctus dui ac purus congue condimentum. Cras sit amet sem ullamcorper, cursus quam sit amet, volutpat lorem. Nam elementum efficitur lectus eu semper. Praesent malesuada sodales risus eu blandit. Nam a massa nisi. Maecenas turpis mauris, laoreet dignissim faucibus in, dictum sit amet lorem. Fusce commodo lorem ac erat semper sollicitudin.</p>";
                            } 
                        } else {
                            echo  "<h1>Choose something, dude</h1>";
                        }
                    ?>
                </div>
                
               <?php endif; ?>
                
                
            </div>
        </div>
        
        <div id=""footer></div>
    </body>
</html>


