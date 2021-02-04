<?php

/**
 * Sell More Block Template.
 *

 */

//echo 'test';
//function srl_sell_more_block() {
// Variables and default values
$header = get_field('header');
$subheader = get_field('subheader');
$i = 1;
?>
<div id="sell-more" class="container">
   <?php if($header): ?>
       <div class="container-header"><h2><?php echo $header; ?></h2></div>
   <?php endif; ?>
   <?php if($subheader): ?>
       <div class="container-sub"><p><?php echo $subheader; ?></p></div>
   <?php endif; ?>
   <?php if(have_rows('selling_point')): 
       while( have_rows('selling_point') ) : the_row(); 
           // vars
           $head = get_sub_field('header');
           $desc = get_sub_field('description');
           ?>
           <div class="sell-more-box box  <?php if ($i%2 ): echo 'left'; endif; ?> ">
               <div class="img-area">
                    <?php if ($i == 1) : echo '<img src="/wp-content/themes/genesis-sample/images/reach_more_people.svg" alt="">';
                    endif; ?>
                    <?php if ($i == 2) : echo '<img src="/wp-content/themes/genesis-sample/images/strangers.svg" alt="">';
                    endif; ?>
                    <?php if ($i == 3) : echo '<img src="/wp-content/themes/genesis-sample/images/customers.svg" alt="">';
                    endif; ?>
               </div>
               <div class="text-area">
                   <div class="box-number number"><?php echo $i . '.'; ?></div>
                   <h3><?php echo $head; ?></h3>
                   <div class="box-desc"><p><?php echo $desc; ?></div>
               </div>
           </div> 
       <?php $i++;
       endwhile;
   endif; ?>
</div>
