<?php
$query6 = "SELECT inventory090822.storeid, 'medicine 1' as medicine, `medicine 1` as avl FROM `inventory090822` WHERE inventory090822.storeid = '$storeID' UNION ALL
SELECT inventory090822.storeid, 'medicine 2' as medicine, `medicine 2` as avl FROM `inventory090822` WHERE inventory090822.storeid = '$storeID' UNION ALL
SELECT inventory090822.storeid, 'medicine 3' as medicine, `medicine 3` as avl FROM `inventory090822` WHERE inventory090822.storeid = '$storeID' UNION ALL
SELECT inventory090822.storeid, 'medicine 4' as medicine, `medicine 4` as avl FROM `inventory090822` WHERE inventory090822.storeid = '$storeID'";

?>