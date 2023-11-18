<?php 
get_header();
require 'cards.php';
require 'boxes.php';
?>

<main>
    <section class="section1">
       
        <img src="<?php echo get_template_directory_uri() . '/assets/images/background.png'?>" alt="">
      
        <div class="hero-content">
            <h1>Your Imagination Is Your Only Limit</h1>
            <p>We always try to make our customer Happy. We provide all kind of facilities. Your Satisfaction is our main priority</p>
            <button class="button">
                <a href="">Discover more</a>
            </button>
        </div> 
   <section class="section2">
    <h1>Our Service</h1>
    <div class="cards">
        <?php
        foreach ($cards as $card) {
            echo '<div class="card">
                    <img src="' . $card['img'] . '" alt="">
                    <h2>' . $card['h2'] . '</h2>
                    <p>' . $card['p'] . '</p>
                  </div>';
        }
        ?>
    </div>
</section>
  <section class="section3">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/map2.png'?>" alt="">
    <div class="content">
        <h1>We always try to give you the best service</h1>
        <p>We always try to make our customer Happy. We provide all kind offacilities. Your Satisfaction is our main priority.</p>
                <div class="boxes">
                    <?php
                    foreach($boxes as $box){
                        echo ' <div class="box">
                    <img src="'.$box['img'].'" alt="">
                        <h2>'.$box['h2'].'</h2>
                        <h3>'.$box['h3'].'</h3>
                    </div>';
                    }
                    ?>
                </div>
        </div>
        
  </section>
  
</main>

<!-- <?php
get_footer();
?> -->