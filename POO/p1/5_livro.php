<?php 

class Livro {
    private string $titulo;
    private int $paginas;
    private int $paginasLidas;

    public function __construct($titulo, $paginas, $paginasLidas) {
        $this->setTitulo($titulo);
        $this->setPaginas($paginas);
        $this->setPaginasLidas($paginasLidas);
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setPaginas(int $paginas): void {
        $this->paginas = $paginas;
    }

    public function getPaginas(): int {
        return $this->paginas;
    }

    public function setPaginasLidas(int $paginasLidas): void {
        $this->paginasLidas = $paginasLidas; 
    }
    public function getPaginasLidas(): int {
        return $this->paginasLidas; 
    }

    public function verificarProgresso(): int { 
        return ($this->paginasLidas / $this->paginas) * 100; 
    }
    public function infos(): void {
            echo "Livro: " . $this->getTitulo() . "<hr>";
            echo "Total Páginas: " . $this->getPaginas() . "<hr>";
            echo "Páginas Lidas: " . $this->getPaginasLidas() . "<hr>";
            echo "Progresso: " . $this->verificarProgresso() . "%<hr>";
        }
    }
    echo "<h1>Instância 1</h1>";
    $book1 = new Livro("The Beginning After The End", 5640, 540);
    $book1->infos();
    
    echo "<h1>Instância 2</h1>";
    $book2 = new Livro("Record of Ragnarok: Shuumatsu no Valkyrie", 194, 56);
    $book2->infos();
    
    echo "<h1>Instância 3</h1>";
    $book3 = new Livro("The Sword and the Wand", 1200, 800);
    $book3->infos();