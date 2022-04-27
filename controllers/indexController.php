<?php

if (!empty($_SESSION)) :
    header('Location: index.php?title=Logged In');
endif;
