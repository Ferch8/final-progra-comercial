<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aula
 *
 * @ORM\Table(name="aula")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AulaRepository")
 */
class Aula
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="edificio", type="string", length=255)
     */
    private $edificio;

    /**
     * @var string
     *
     * @ORM\Column(name="encargado", type="string", length=255)
     */
    private $encargado;

    /**
     * @ORM\OneToMany(targetEntity="Curso", mappedBy="aula")
     */
    private $curso;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Aula
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Aula
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set edificio
     *
     * @param string $edificio
     *
     * @return Aula
     */
    public function setEdificio($edificio)
    {
        $this->edificio = $edificio;

        return $this;
    }

    /**
     * Get edificio
     *
     * @return string
     */
    public function getEdificio()
    {
        return $this->edificio;
    }

    /**
     * Set encargado
     *
     * @param string $encargado
     *
     * @return Aula
     */
    public function setEncargado($encargado)
    {
        $this->encargado = $encargado;

        return $this;
    }

    /**
     * Get encargado
     *
     * @return string
     */
    public function getEncargado()
    {
        return $this->encargado;
    }

    public function __toString(){
      return $this->nombre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->curso = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add curso
     *
     * @param \AppBundle\Entity\Curso $curso
     *
     * @return Aula
     */
    public function addCurso(\AppBundle\Entity\Curso $curso)
    {
        $this->curso[] = $curso;

        return $this;
    }

    /**
     * Remove curso
     *
     * @param \AppBundle\Entity\Curso $curso
     */
    public function removeCurso(\AppBundle\Entity\Curso $curso)
    {
        $this->curso->removeElement($curso);
    }

    /**
     * Get curso
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCurso()
    {
        return $this->curso;
    }
}
