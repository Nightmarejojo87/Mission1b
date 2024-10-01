<?php
var_dump($numero);
var_dump($montant);
var_dump($lAnnee);
?>
<table class="listeLegere">
  	   
       </caption>
             <tr>
                <th class="annee">annee</th>
                <th class="total">total</th>               
             </tr>
        <?php      
          foreach ( $numero as $numb ) 
		  {
			$lAnnee = $numb['annee'];
			$montant = $numb['montant_total'];
			
		?>
             <tr>
                <td><?php echo $lAnnee ?></td>
                <td><?php echo $montant ?></td>
                
             </tr>
        <?php 
          }
		?>
    </table> 