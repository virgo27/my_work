<?php
empty re 
$reg = "//";

$reg = "/xyz/";
xyz
xyz 123 dsdsjh
xyzsagsah
123 xyz 123
123xyz123dhjd
123fhjgxyz

carrot ^
$reg = "/^xyz/";
xyz
xyz 123 dsdsjh
xyzsagsah


$reg = "/xyz$/";
xyz
123fhjgxyz

$reg = "/^xyz$/";
xyz

$reg = "/^xyza?$/";
xyz
xyza

$reg = "/^xyza*$/";
xyz
xyza
xyzaa
xyzaaaa
xyzaaaaaaaaaaaaaaaaaaaaaa

$reg = "/^xyza+$/";
xyza
xyzaa
xyzaaaa
xyzaaaaaaaaaaaaaaaaaaaaaa

$reg = "/^xyza{2}$/";
xyzaa

$reg = "/^xyza{2,4}$/";
xyzaa
xyzaaa
xyzaaaa

$reg = "/^xyz[10,]$/";
xyz1
xyz0
xyz,


$reg = "/^xyz[0-9a-dA-D\-\?]\?$/";


only alphabtes, atleast 1 character, first letter capital, remianing small
$reg = "/^[A-Z][a-z]*$/";

only alphabtes, atleast 1 character, capital/small all alowed
$reg = "/^[A-Za-z][A-Za-z]*$/";
$reg = "/^[A-Za-z]+$/";
$reg = "/^[a-z]+$/i";

starts with alphabet, contain only alphabtes and digits, min 6 max 20
capital small all alowed
$reg = "/^[a-z][a-z0-9]{5,19}$/i";

starts with alphabet, contain only alphabtes and digits, min 6 max 16
capital small all alowed
$reg = "/^[a-z][a-z0-9]{5,15}$/i";


1-111-1111111
11-111-1111111
111-111-1111111
1111-111-1111111
$reg = "/^[0-9]{1,4}\-[0-9][0-9][0-9]\-[0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/";
$reg = "/^[0-9]{1,4}\-[0-9]{3}\-[0-9]{7}$/";
$reg = "/^\d{1,4}\-\d{3}\-\d{7}$/";

ab-1111-12343
xz-1111-12343

$reg = "/^(ab|xz)\-\d{4}\-\d{5}$/";



























?>