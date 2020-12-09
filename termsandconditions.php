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
                    
                    <h1>Terms and Conditions</h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse commodo maximus tellus sit amet venenatis. Mauris egestas turpis non scelerisque tincidunt. Sed tristique lectus ut aliquet fringilla. Mauris id justo vel felis auctor ultricies. Vivamus sem nisl, semper vitae risus sit amet, dictum blandit urna. Nulla suscipit vel dui a tincidunt. Ut volutpat luctus cursus. Curabitur vitae purus vitae nulla cursus ultricies in quis ex. Vestibulum quis orci venenatis, pharetra lorem sit amet, bibendum felis. Ut ornare, risus vel tempor sagittis, ligula eros tristique metus, sed rutrum sem augue et lacus. Maecenas nec felis gravida, fringilla dolor et, tincidunt mauris. Suspendisse sagittis tortor sed nulla convallis, in venenatis ex pellentesque. Maecenas luctus hendrerit ipsum ac suscipit. Mauris mattis, sapien sit amet hendrerit gravida, urna odio sollicitudin elit, sit amet congue felis odio non sem.</p>

                    <br>

                    <p>Maecenas eget nisi ut ipsum rhoncus consequat. In nunc urna, luctus quis urna eu, porttitor efficitur eros. Vestibulum in lectus faucibus, varius ipsum non, tempus dui. Nam interdum malesuada urna in feugiat. Duis diam leo, aliquet id gravida id, tempus vel nunc. Nunc semper tempus arcu, ac euismod eros ullamcorper non. Maecenas euismod felis nec nibh tincidunt, in efficitur massa venenatis.</p>

                     <br>

                    <p>Suspendisse potenti. Praesent luctus dui ac purus congue condimentum. Cras sit amet sem ullamcorper, cursus quam sit amet, volutpat lorem. Nam elementum efficitur lectus eu semper. Praesent malesuada sodales risus eu blandit. Nam a massa nisi. Maecenas turpis mauris, laoreet dignissim faucibus in, dictum sit amet lorem. Fusce commodo lorem ac erat semper sollicitudin.</p>

                     <br>

                    <p>Nam eget tortor vel elit fermentum lacinia ac eget est. Aenean lobortis dictum tellus sodales dapibus. Phasellus quis purus dictum, malesuada orci vitae, finibus magna. Integer tempus sed nunc sit amet placerat. Donec scelerisque ipsum velit, at fringilla justo pellentesque nec. Curabitur ut ligula molestie, ultricies sapien sit amet, scelerisque enim. Phasellus risus ex, fermentum sit amet ante at, fringilla dapibus lacus. Morbi orci nunc, faucibus nec arcu ut, sagittis consequat quam. Quisque bibendum imperdiet erat, ac eleifend dolor aliquam vitae. Quisque tortor justo, congue id leo sit amet, commodo molestie urna. Cras interdum, orci non fringilla luctus, est ex euismod lectus, eu tempus odio velit ac libero. Suspendisse iaculis mauris et est convallis, eget facilisis ex feugiat.</p>
                     <br>
                     
                </div>
               <?php endif; ?>
                
                
            </div>
        </div>
        
        <div id=""footer></div>
    </body>
</html>


