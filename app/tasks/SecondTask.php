<?php
header('Content-Type: text/html; charset=utf-8');
//Создайте многомерный массив, содержащий названия фильмов, организованных по жанрам:
// ассоциативный массив, в котором имена полей будут разными жанрами («комедия», «мелодрама», «детектив» и др.), а элементами — названия фильмов. Выведите информацию.
//Просмотрите массив (см. предыдущую задачу) в цикле, выводя название жанра и связанные с ним фильмы.
$genre = array(
    array(
    genre => "Комедия",
    films => array
    ('Вперед','Плохие парни','История игрушек 4','Алладин','1+1')),
    array(
    genre => "Мелодрама",
    films => array
    ('Путь домой','Солнце тоже звезда','Звезда родилась','Лед','Помешанный на времени')),
    array(genre => "Детектив",
        films => array
        ('Детектив Пикачу','Ночные игры','Дама треф','Сиротский бруклин','Хороший лжец')),
    array(genre => "Ужасы",
        films => array
        ('Проклятие','Оно 2','Тихое место','Веном','Мег: монстр глубины'))
);

for ($i = 0; $i < count($genre); $i++){
    echo 'Жанр:<b> ' .$genre[$i][genre]. '</b></br> ';
    echo 'Фильмы: </br>';
    foreach ($genre[$i][films] as $item){
        echo '<i>|  '.$item.'  </i> ';
    }
    echo '<hr></br>';
}



