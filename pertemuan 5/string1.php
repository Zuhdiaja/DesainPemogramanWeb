<?php

$lorem_ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Morbi vel scelerisque turpis. Donec malesuada mi eu elit ultricies,
ut tempor mi sagittis. Integer pellentesque dolor at porta gravida.
Vivamus in leo iaculis, suscipit ex a, gravida ipsum. Mauris gr";

echo "<p>$lorem_ipsum</p>";
echo "Panjang karakter: " . strlen($lorem_ipsum) . "<br>";
echo "Panjang kata: " . str_word_count($lorem_ipsum) . "<br>";
echo "<p>" . strtoupper($lorem_ipsum) . "</p>";
echo "<p>" . strtolower($lorem_ipsum) . "</p>";

?>
