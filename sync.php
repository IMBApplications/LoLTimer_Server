<?php
    include 'profile.php';

    // damit ich mich erinnere:
    // so können wir die "sessions" für alle speichern
    // $memcache = new Memcache;
    
    $tst = new Profile();    
    $tst->startTopBlue();    
    
    var_dump($tst);
?>
