<?php
if (have_rows('list_item')): ?>
    <div class="srl-numbered-list container inner-container container-centred">
        <ol>
            <?php while (have_rows('list_item')): the_row(); 
            // vars
            $listHeader = get_sub_field('list_header');
            $listText = get_sub_field('list_text');
            ?>
                <li>
                    <h4><?php echo $listHeader; ?></h4>
                    <?php echo $listText; ?>
                </li>
            <?php endwhile; 
            ?>
        </ol>
    </div>
<?php endif; ?>