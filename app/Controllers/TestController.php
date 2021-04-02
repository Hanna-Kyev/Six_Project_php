<?php

// преобразование для работы с json
$jf = file_get_contents(CONFIG.'/configs.json');
$data = json_decode($jf);
var_dump($data);

echo "<h2>_REQUEST:</h2>";
var_dump($_REQUEST);
echo "<h2>GET:</h2>";
var_dump($_GET);
echo "<h2>POST:</h2>";
var_dump($_POST);
?>
<h1>Test Controller</h1>
<form action="/test" method="POST">
    <label for="">Name:</label>
    <input type="text" name="Username" value="My name">
    <input type="submit" name="submit" value="Bla-bla-bla">
</form>

<?php

/*создание, открытие, чтение, закрытие файла

if(file_exists(CONFIG. '/contact.txt')){
    echo "<h2>File exist</h2>";
} else { echo "<h2>File not exist</h2>";
    $fh = fopen(CONFIG. '/contact.txt', 'w');
    fclose($fh);
}*/

/*записать в файл
file_put_contents(CONFIG. '/contact.txt', "Hello File Могу писать что захочу Только в одну строку");

чтение файла
echo file_get_contents(CONFIG. '/contact.txt');*/


