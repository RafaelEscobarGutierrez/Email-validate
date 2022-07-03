<?php
    if(isset($_POST['subir'])){
        $acceso = true;

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                // Realmacenamos lo rescatado en el input de email
                $email = $_POST['e-mail'];
                // Generamos el ARRAY con todos los caracteres del email
                $poin = str_split($email);
                // Creamos una variable contador
                $cont=0;
                // For que recorre todo el array "poin"
                foreach($poin as &$elem){
                    // Condicionale de caracteres que NO deben aparecer
                    if($elem == '#' || $elem == '&' || $elem == '%' || $elem == '$' || $elem == '_' || $elem == '-' ||  $elem == '+'){
                           $cont = $cont+1;
                    }
                }
                
                // Mensaje si el contador de caracteres prohibidos aumenta
                if($cont>0){
                    //ERROR POSIBLE #4
                    $acceso=false;

                //    echo "<p class='error'>Errores: '$cont'</p>";
                //    echo $email;
                }else{
                    //Obtenemos el dominio
                    $domi = substr(strrchr ($email, '.'),1);

                    //Verificamos que la terminación del dominio sea correcta (tamaño)
                    if (strlen($domi)>1 && strlen($domi)<6 && (!strstr($domi,"@")) ){
                        //Almacenamos previo al dominio
                        $domi_prev = substr($email,0,strlen($email) - strlen($domi) - 1);
                        //Verica que lo ultimo no sea (@ o .)
                        $ultimo = substr($domi_prev,strlen($domi_prev)-1,1);
                        if ($ultimo != "@" && $ultimo != "."){
                            // Damos acceso
                            if($acceso==true){
                                echo "<p class='error'>TE AMO ♡</p>";  
                            }
                            
                        }else{
                            //ERROR POSIBLE #3
                            $acceso=false;

                            //echo "<p class='error'>Verifique la sintaxis de su correo</p>";    
                        }
                    }else{
                        //ERROR POSIBLE #2
                        $acceso=false;
                        
                        //echo "<p class='error'>El tamaño del dominio es erroneo</p>";
                    }
                }
                   
            }else{
                //ERROR POSIBLE #1
                $acceso=false;

                //echo "<p class='error'>EMAIL ERRONEO</p>";
            }

            if($acceso==false){
                echo "<p class='error'>Verifique la sintaxis de su correo</p>"; 
            }
    }
?>