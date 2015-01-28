<?php

namespace Entity;

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

    /**
     * @Column(type="string", name="npaginas", nullable=true)
     */
    private $npaginas;

    /**
     * @Column(type="string", name="formato", nullable=true)
     */
    private $formato;

    /**
     * @Column(type="string", name="preco", nullable=true)
     */
    private $preco;

    /**
     * @Column(type="string", name="resenha", nullable=true)
     */
    private $resenha;

    /**
     * @Column(type="string", name="dtlanc", nullable=true)
     */
    private $dtlanc;

    /**
     * @Column(type="string", name="capa", nullable=true)
     */
    private $capa;

    /**
     * @Column(type="string", name="maisvend", nullable=true)
     */
    private $maisvend;

    /**
     * @Column(type="string", name="categoria", nullable=true)
     */
    private $categoria;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getNpaginas()
    {
        return $this->npaginas;
    }

    /**
     * @param mixed $npaginas
     */
    public function setNpaginas($npaginas)
    {
        $this->npaginas = $npaginas;
    }

    /**
     * @return mixed
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * @param mixed $formato
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getResenha()
    {
        return $this->resenha;
    }

    /**
     * @param mixed $resenha
     */
    public function setResenha($resenha)
    {
        $this->resenha = $resenha;
    }

    /**
     * @return mixed
     */
    public function getDtlanc()
    {
        return $this->dtlanc;
    }

    /**
     * @param mixed $dtlanc
     */
    public function setDtlanc($dtlanc)
    {
        $this->dtlanc = $dtlanc;
    }

    /**
     * @return mixed
     */
    public function getCapa()
    {
        return $this->capa;
    }

    /**
     * @param mixed $capa
     */
    public function setCapa($capa)
    {
        $this->capa = $capa;
    }

    /**
     * @return mixed
     */
    public function getMaisvend()
    {
        return $this->maisvend;
    }

    /**
     * @param mixed $maisvend
     */
    public function setMaisvend($maisvend)
    {
        $this->maisvend = $maisvend;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }


}