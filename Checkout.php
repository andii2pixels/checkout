<?php
add_filter(	
              'cfw_display_bump',	
              function( $display, $bump ) {		
                             if ( $bump->get_id() !== 1234 )  {			
                                          return $display;		
                             } 	

                         	return WC()->cart->get_total( false ) 50.00;	},
10,	
2
);
