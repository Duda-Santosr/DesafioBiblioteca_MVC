<?php

function exibirLivros($livros){

echo "<h2> Biblioteca De Livros:</h2> <ul>";

foreach($livros as $livro){

echo "<li>{$livro['titulo']} - {$livro ['autora']} - {$livro ['ano']}</li>";

}

echo "</ul>";

}
?>