<?php  
				        while($loop->have_posts()) : $loop->the_post();
				      ?>  
				      <div class="col-6 col-md-4 mb-4">
                	
				           <p><?php echo get_the_title(); ?></p>
				      </div>      
				          
				      <?php       
				        endwhile; ?>