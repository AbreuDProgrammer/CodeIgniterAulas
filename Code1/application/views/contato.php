<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="container">
    <? if(isset($formErrors) && $formErrors): ?>
        <div class="alert-danger">
            <?= $formErrors; ?>
        </div>
    <? elseif($this->session->flashdata('success_msg')): ?>
        <div>
            <? $this->session->flashdata('success_msg'); ?>
        </div>
    <? endif; ?>
    <!--
    /**
     * Preenchimento dos campos com os dados passados pelo user.
     * 
     * O metodo set_value() -> recupera os dades eviados pelo form, utilizado na view
     * 
     * O metodo set_value() tem um parâmetro que é o nome do campo, o mesmo usado no input
     */
    -->
    <form method="post" id="form">
        <label for="nome">Nome</label>
        <input value="<?= set_value('nome'); ?>" name="nome" placeholder="Nome">

        <label for="email">Email</label>
        <input value="<?= set_value('email'); ?>" name="email" placeholder="Email" type="email">

        <label for="telefone">Telefone</label>
        <input value="<?= set_value('telefone'); ?>" name="telefone" placeholder="Telefone" type="tel">

        <label for="message">Mensagem</label>
        <textarea id="message" value="<?= set_value('message'); ?>" name="message" rows="10"></textarea>
        
        <input type="reset">
        <input type="submit">
    </form>
</div>