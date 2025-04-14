<?php

class Livro{

    private $livros = [
        ['titulo' => 'O Acordo', 'autora' => 'Elle Kennedy', 'ano' => 2016],
        ['titulo' => 'A Seleção', 'autora' => 'Kiera Cass', 'ano' => 2012],
        ['titulo' => 'Mil Beijos de Garoto', 'autora' => 'Tillie Cole', 'ano' => 2016],
        ['titulo' => 'Verity', 'autora' => 'Collen Hoover', 'ano' => 2018],
        ['titulo' => 'As Coisas Que Nunca Superamos', 'autora' => 'Lucy score', 'ano' => 2023],
        ['titulo' => 'Eu e Esse Meu Coração', 'autora' => 'C. C. Hunter', 'ano' => 2018],
        ['titulo' => 'Como Eu Era Antes de Você', 'autora' => 'Jojo Moyes', 'ano' => 2012]

    ];

    public function listarLivros(){
        return $this ->livros;
    }
}

?>