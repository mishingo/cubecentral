<script>
   var url = [<?php the_field('popunder_url_array'); ?>];
   <?php
      if(!empty(get_field('pop_times'))){
         echo "var pop_times =".get_field('pop_times').";";
      }
    ?>

</script>
