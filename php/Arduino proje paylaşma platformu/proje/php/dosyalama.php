<?php
    include "configpro.php";
    $id;
    $baslik;
    $kod;

    $sql=mysql_query("SELECT * FROM projeler order by proje_id DESC");
    while($oku=mysql_fetch_array($sql)) {
        $id=$oku["proje_id"];
        $baslik=$oku["baslik"];
        $yapilisi=$oku["yapilisi"];
        $kod=$oku["kod"];
        touch("../projeler/$id.php");
        break;
    }
    $dosya = fopen("../projeler/$id.php","w");
    fwrite($dosya,'
    <div class="container ">
 
         <div class="row">
        	<div class="col-md-1">
            </div>
            <div class="col-md-10 orta">
            	
                <div class="panel panel-default">
                	<div class="panel-heading"><h4 >'.$baslik.'</h4></div>
                	<div class="panel-body">
                        <p class="yazi">'.$yapilisi.'
                        </p>
                        
                        
                   
                        
                        <div class="panel panel-info ">
                        
                        
                        
                            <pre>
                            '.$kod.'
                            </pre>      
                        </div>
                     
                    </div>      
                </div>    	
            </div>   
         </div>            
    </div>
    ');
    fclose($dosya);



?>