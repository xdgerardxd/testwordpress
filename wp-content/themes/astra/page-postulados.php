<?php get_header(); ?>


<!--Muestro usuarios conectados-->

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">

            <div class="list-group">
                <!--Titulo-->
                <div href="#" class="list-group-item list-group-item-action active">
                    los usuarios registrados son:
                </div>

                <div>
                    <?php
                        //Accedo a variable global del usuario logueado
                        global $current_user;
                        //Funcion para obtener info del usuario logueado
                        get_currentuserinfo();
                        // Guardo los usuario
                        $usuario = esc_attr($current_user->user_login);
                        $acum= 0;
                        // Si el usuario es admin, muestro sus usuarios suscritos
                        if ($usuario != 'Admin'){
                            $usuarios= get_users();
                            
                            foreach ($usuarios as $usuario) {
                                print "<div> Usuario Nro: $acum </div>";
                                $acum += $acum + 1;
                                // Nombre
                                echo '<div class="list-group-item list-group-item-action"> >' . $usuario->display_name . '</div>';
                                
                                // Nickname
                                echo '<div class="list-group-item list-group-item-action"> >' . $usuario->user_nicename . '</div>';
                            
                                // Email
                                echo '<div class="list-group-item list-group-item-action"> >' . $usuario->user_email . '</div>';

                                // Fecha de registro
                                echo '<div class="list-group-item list-group-item-action"> >' . $usuario->user_registered . '</div>';

                                //Login del usuario. Ej: david
                                //echo '<div>' . $usuario->user_login . '</div>';
                                //Contraseña encriptada (hash). Ej: $P$BK1deNU7lV/rgwp2oncgESRHRYLedRF.
                                //echo '<div>' . $usuario->user_pass . '</div>';
                                //Url de su web. Ej: www.loopeando.com
                                //echo '<div>' . $usuario->user_url . '</div>';
                            }
                        }else{
                            echo "Estimado usuario, usted no es administrador para ver los suscritores";
                        }
                    ?>
                </div>
            </div>  

        </div>  
    </div>
</div>

<?php get_footer(); ?>
