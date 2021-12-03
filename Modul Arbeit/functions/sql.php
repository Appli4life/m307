<?php
// Insert Into Service
function insert_service($vn, $nn, $e, $t, $p, $d)
{
        global $db;
        $values = array(':vn' =>  $vn,
                        ':nn' => $nn,
                        ':e'=> $e,
                        ':t' => $t,
                        ':p' => $p,
                        ':d' => $d);
                        
        $sql = "Insert into service(vorname, nachname, email, telefon, priorität_id, dienstleistung_id)
                Values (:vn,:nn,:e,:t,:p,:d)";

        $erg = $db->prepare($sql);

        $erg->execute($values);
}
?>