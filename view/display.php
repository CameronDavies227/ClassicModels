<?php
include "headerv.php";
include "nav.php";
include "../controller/officeListingsController.php";
if (isset($data)) {
foreach ($data as $key => $value) {
$officecode;
echo "<div class='listoffices'><ul>";
foreach ($value as $k => $v) {
if ($k == 'image_path') {
echo "<li><span class='reclabel'>" . ucwords($k) . " </span><span class='rec'>" . $v . "</span></li>";
echo "<li><span class='reclabel'> Image </span><span class='rec'><img src='" . $v . "' alt='office Image'></span
></li>";
} else {
echo "<li><span class='reclabel'>" . ucwords($k) . " </span><span class='rec'>" . ucwords($v) . "</span></li>";
}
if ($k == 'officeCode')
$officeCode = $v;
}
echo "<li><a href='editoffice.php/?officeCode=$officeCode'>Edit</a>&nbsp;&nbsp;";
echo "<a href='../controller/deleteofficecontroller.php/?officeCode=$officeCode'>Delete</a></li></div></ul>";
}
}
include "footerv.php";