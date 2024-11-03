<?php

class Gaveta {
    private array $itens = [];

    public function adicionarItem(Item $item) {
        $this->itens[] = $item; 
    }

}    