<?php

/* creacion de una constante la cual nos guardara la ruta de nuestro proyecto */

include_once(`functions.php`)
if ( !defined(`ROOT`))
{define("ROOT", `http://`.$_SERVER[`HTTP_HOST`].getFolderProject());
 } /* verificar codigo */


