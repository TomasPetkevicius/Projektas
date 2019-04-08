<footer>
            <?php
    function metai(){
        
        $made = 2019;
                    
            if (date('Y') > $made) {
            echo '&copy'.$made."-".date('Y');}
            elseif ($made >= date('Y')) {
            echo '&copy'.date('Y');}
         } 
    metai();
    ?>
        </footer>