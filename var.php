<?php
$hello = "Hello, PHP!\n";
$num = 42;
print($hello);
print($num);
?>
<?php
$name = "侍太郎";

function func(){
    global $name;
    print($name);
}

print($name."\n");
# ターミナルに侍太郎と表示される

func();
# ターミナルに侍太郎と表示される
?>
<?php
$name = "青木達哉";
print($name)
?>