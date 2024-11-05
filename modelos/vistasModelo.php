<?php

class vistasModelo {

    /*----------- Modelo p/Obtener las vistas -----------------*/

    protected static function obtener_vistas_modelo( $vistas ) {
        $listaBlanca = [ 'home', 'client-list', 'client-search', 'client-new', 'client-update',
        'company', 'item-list', 'item-new', 'item-search', 'item-update', 'reservation-list',
        'reservation-new', 'reservation-pending', 'reservation-reservation', 'reservation-search',
        'reservation-update', 'user-list', 'user-new', 'user-search', 'user-update' ];
        if ( in_array( $vistas, $listaBlanca ) ) {
            if ( is_file( './vistas/contenidos/'.$vistas.'-view.php' ) ) {
                $contenido = './vistas/contenidos/'.$vistas.'-view.php';
            } else {
                $contenido = '404';
            }

        } elseif ( $vistas === 'login' || $vistas === 'index' ) {
            $contenido = 'login';
        } else {
            $contenido = '404';
        }
        return $contenido;
    }
}