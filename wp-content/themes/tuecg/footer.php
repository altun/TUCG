        <div id="footer-container">
    	<div id="footer-widgets">
        	
            <div class="widget-wrap clearfix">
            	
                <div class="widget-section"> 
                	
                    <?php if (function_exists( 'dynamic_sidebar' ))  dynamic_sidebar( 'Footer One' )  ?>
                    
                </div>
                  
                <div class="widget-section">
                
                	<?php if (function_exists( 'dynamic_sidebar' ))  dynamic_sidebar( 'Footer Two' )  ?>
                    
                </div>

                <div class="widget-section">
                
                	<?php if (function_exists( 'dynamic_sidebar' ))  dynamic_sidebar( 'Footer Three' )  ?>
                    
                </div>
                
                <div class="widget-section column-last">
                
                	<?php if (function_exists( 'dynamic_sidebar' ))  dynamic_sidebar( 'Footer Four' )  ?>
                    
                </div>
            
       		</div>
            
        </div>
        
    <div class="content-wrapper">
        <div id="footer" class="clearfix">
        
            <p class="footer-bottom-left">Türkiye Uzaktan Eğitim Çalışma Grubu</p>
            <p class="footer-bottom-right"></p>
        
        </div>
    </div>
	</div>

    </div> 
		
        
        
	 <?php wp_footer(); ?>
		</div>	
        </body>
</html>