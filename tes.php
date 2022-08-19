    <?php
    if($_POST){
    	$mulai = $_POST['thn'].'-'.$_POST['bln'].'-'.$_POST['tgl'];
    	$akhir = $_POST['thn2'].'-'.$_POST['bln2'].'-'.$_POST['tgl2'];
    	if(strtotime($mulai) > strtotime($akhir)){
    		echo 'Tanggal akhir salah, lebih awal dari tanggal mulai';
    	}else{
    		//lakukan hal lain, misal
    		//simpan data
    	}
    }
    ?>
    <form action="" method="post">
    Mulai dari  tanggal 
     <select name="tgl">
    		<?php
    					for ($i=1; $i<=31; $i++) {
    						$tg = ($i<10) ? "0$i" : $i;
    						echo "<option value='$tg'>$tg</option>";	
    					}
    				?>
            </select>
           -  
           <select name="bln">
    	   <?php
    					for ($i=1; $i<=12; $i++) {
    						$bl = ($i<10) ? "0$i" : $i;
    						echo "<option value='$bl'>$bl</option>";	
    					}
    				?>
              </select>
            -
            <select name="thn" >
    		<?php
    					for ($i=1970; $i<=2000; $i++) {
    						echo "<option value='$i'>$i</option>";	
    					}
    				?>
              </select> 
     
              Sampai tanggal
     
       <select name="tgl2">
    		<?php
    					for ($i=1; $i<=31; $i++) {
    						$tg = ($i<10) ? "0$i" : $i;
    						echo "<option value='$tg'>$tg</option>";	
    					}
    				?>
            </select>
           -  
           <select name="bln2">
    	   <?php
    					for ($i=1; $i<=12; $i++) {
    						$bl = ($i<10) ? "0$i" : $i;
    						echo "<option value='$bl'>$bl</option>";	
    					}
    				?>
              </select>
            -
            <select name="thn2" >
    		<?php
    					for ($i=1970; $i<=2000; $i++) {
    						echo "<option value='$i'>$i</option>";	
    					}
    				?>
              </select> 
    </form>