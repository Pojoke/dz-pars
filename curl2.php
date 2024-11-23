<?php
$read=file_get_contents("library.txt");
$unserialize=unserialize($read);



echo '<table border="1" cellpadding="10" cellspacing="0">';
echo '<tr>';
echo '<th>Название</th>';
echo '<th>Автор</th>';
echo '<th>Год издания</th>';
echo '<th>Жанр</th>';
echo '</tr>';


foreach ($unserialize as $book) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($book['title']) . '</td>';
    echo '<td>' . htmlspecialchars($book['author']) . '</td>';
    echo '<td>' . htmlspecialchars($book['year']) . '</td>';
    echo '<td>' . htmlspecialchars($book['genre']) . '</td>';
    echo '</tr>';
}

echo '</table>';