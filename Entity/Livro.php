<?php

namespace Entity;
use Doctrine\ORM\Mapping\Column;

/**
 * @Entity
 * @Table(name="livros")
 */
class Livro
{
    /**
     * @Id
     * @Column(type="integer", name="id")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string", name="titulo", nullable=true)
     */
    private $titulo;

    /**
     * @Column(type="string", name="autor", nullable="true")
     */
    private $autor;
}