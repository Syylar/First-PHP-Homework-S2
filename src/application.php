<?php
session_start();

if(isset($_POST['username'])) {
    $_SESSION['user_name']          = $_POST['username'];
    $_SESSION['is_user_loged_in']   = true;
}

function is_user_loged_in() {
    
    if(isset($_SESSION['is_user_loged_in'])) {
        return $_SESSION['is_user_loged_in'];
    }
    
    return false;
}

function get_username() {
    
    if(isset($_SESSION['user_name'])) {
        return $_SESSION['user_name'];
    }
    
    return "";
}


// snake case
function application_slogan($webApplicationTitle) {
    echo "<strong class='logo'> $webApplicationTitle </strong>";    
}

function greet_visitor($visitorUsername) {
    
    $visitorGreatingMessageIndex = rand(1, 10);
    
    $shouldGreatingBePlesant    =   $visitorGreatingMessageIndex > 1 && 
                                    $visitorGreatingMessageIndex < 5;
    
    $shouldGreatingBeRude       =   $visitorGreatingMessageIndex > 6 && 
                                    $visitorGreatingMessageIndex < 8;    
    
    $shouldGreatingBeUsual      =   $visitorGreatingMessageIndex == 9 || 
                                    $visitorGreatingMessageIndex == 10;
    
    
    if($visitorUsername) {
        
        if($shouldGreatingBePlesant) {
            echo "<span>Как я караш $visitorUsername</span>";
        }
        else if($shouldGreatingBeRude) {
            echo "<span>Много си голям $visitorUsername</span>";
        }
        else if($shouldGreatingBeUsual) {
            echo "<span>Машина си $visitorUsername</span>";
        }
        else {
            echo "<span>Здрасти $visitorUsername</span>";
        }
    }
    else {
        echo "<span>Здрасти Гостенино</span>";
    }
}

function greet_visitor_greeting() {
    
    $visitorGreatingMessageIndex = rand(1, 10);
        
    $shouldGreatingBePlesant    =   $visitorGreatingMessageIndex > 1 && 
                                    $visitorGreatingMessageIndex < 5;
    
    $shouldGreatingBeRude       =   $visitorGreatingMessageIndex > 6 && 
                                    $visitorGreatingMessageIndex < 8;    
    
    $shouldGreatingBeUsual      =   $visitorGreatingMessageIndex == 9 || 
                                    $visitorGreatingMessageIndex == 10;
    
    $visitorUsername            = get_username();
    
    if(!$visitorUsername) {
        return "<span>Здрасти Гостенино</span>";
    }
    
    if($shouldGreatingBePlesant) {
        return "<span>Как я караш $visitorUsername</span>";
    }

    if($shouldGreatingBeRude) {
        return "<span>Много си голям $visitorUsername</span>";
    }
    
    if($shouldGreatingBeUsual) {
        return "<span>Машина си $visitorUsername</span>";
    }    
    
    return "<span>Здрасти $visitorUsername</span>";
}

function slogan() {
    
    $webApplicationTitle                    = "Fat Cat Web Store";
    application_slogan($webApplicationTitle);
    echo greet_visitor_greeting(); // 
}

function main_menu() {

    echo '<ul>';
        if(is_user_loged_in()) :
            echo "<li class='list--item'><a href='index.php'>Home</a></li>";
            echo "<li class='list--item'><a href='store.php'>Store</a></li>";
            echo "<li class='list--item'><a href='logout.php'>Logout</a></li>";
        else:
            echo "<li class='list--item'><a href='index.php'>Home</a></li>";
            echo "<li class='list--item'><a href='signin.php'>Sign in</a></li>";
            echo "<li class='list--item'><a href='signup.php'>Sign up</a></li>";
        endif;
    echo '</ul>';   
}



function redirect($location) {
    header("Location: $location");
}