<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    //$this->router->fetch_class() : Verifica se a classa chamada é Raiz
    //$this->router->fetch_method() : Se existe o metodo na classe
?>
<nav>
    <ul class="nav menu-nav">
        <li class="<?= ($this->router->fetch_class() == 'Raiz' && $this->router->fetch_method() == 'index')?'active':null; ?>">
            <a href="<?= base_url('raiz'); ?>">Home</a>
        </li>
        <li class="<?= ($this->router->fetch_class() == 'Raiz' && $this->router->fetch_method() == 'empresa')?'active':null; ?>">
            <a href="<?= base_url('empresa'); ?>">A Empresa</a>
        </li>
        <li class="<?= ($this->router->fetch_class() == 'Raiz' && $this->router->fetch_method() == 'servicos')?'active':null; ?>">
            <a href="<?= base_url('servicos'); ?>">Serviços</a>
        </li>
        <li class="<?= ($this->router->fetch_class() == 'Raiz' && $this->router->fetch_method() == 'index')?'active':null; ?>">
            <a>Contatos</a>
        </li>
        <li class="<?= ($this->router->fetch_class() == 'Raiz' && $this->router->fetch_method() == 'index')?'active':null; ?>">
            <a>Upload</a>
        </li>
        <li class="<?= ($this->router->fetch_class() == 'Raiz' && $this->router->fetch_method() == 'index')?'active':null; ?>">
            <a>Download</a>
        </li>
    </ul>
</nav>