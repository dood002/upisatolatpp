<?php
$detect = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);


if ( $detect === 'en' ) {

    include('./lang/en.php');
}
elseif  ( $detect === 'et' ) {

    include('./lang/et.php');
}
elseif  ( $detect === 'lt' ) {

    include('./lang/lt.php');
}
elseif  ( $detect === 'sk' ) {

    include('./lang/sk.php');
}
elseif  ( $detect === 'sl' ) {

    include('./lang/sl.php');
}
elseif  ( $detect === 'bg' ) {

    include('./lang/bg.php');
}
elseif  ( $detect === 'de' ) {

    include('./lang/de.php');
}
elseif  ( $detect === 'fr' ) {

    include('./lang/fr.php');
}
elseif  ( $detect === 'it' ) {

    include('./lang/it.php');
}
elseif  ( $detect === 'pt' ) {

    include('./lang/pt.php');
}
elseif  ( $detect === 'es' ) {

    include('./lang/es.php');
}
elseif  ( $detect === 'zh' ) {

    include('./lang/zh.php');
}
elseif  ( $detect === 'nl' ) {

    include('./lang/nl.php');
}
elseif  ( $detect === 'ro' ) {

    include('./lang/ro.php');
}
elseif  ( $detect === 'cs' ) {

    include('./lang/cs.php');
}
elseif  ( $detect === 'is' ) {

    include('./lang/is.php');
}
elseif  ( $detect === 'ka' ) {

    include('./lang/ka.php');
}
elseif  ( $detect === 'pl' ) {

    include('./lang/pl.php');
}
else {
    include('./lang/en.php');
}
?>