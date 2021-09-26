<?php

class Producto
{
    /**
     * @var int*j
     */
protected $producto_id;

    /**
     * @var string
     */
protected $nombre;

    /**
     * @var string
     */
protected $marca;

  /**
     * @var int
     */
protected $precio;

    /**
     * @var int
     */
protected $rodado;

    /**
     * @var string
     */
protected $imagen;

    /**
     * @var string
     */
protected $alt;

/**
     * @var string
     */
protected $banner;

 /**
     * @var string
     */
    protected $categoria;

    /**
     * @var string
     */
    protected $descripcion;

    /**
     * @var array
     */
    protected $caracteristicas;







    /**
     * @return int
     */
    public function getProductoId(): int
    {
        return $this->producto_id;
    }

    /**
     * @param int $producto_id
     */
    public function setProductoId(int $producto_id): void
    {
        $this->producto_id = $producto_id;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * @param string $marca
     */
    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return int
     */
    public function getPrecio(): int
    {
        return $this->precio;
    }

    /**
     * @param int $precio
     */
    public function setPrecio(int $precio): void
    {
        $this->precio = $precio;
    }

    /**
     * @return int
     */
    public function getRodado(): int
    {
        return $this->rodado;
    }

    /**
     * @param int $rodado
     */
    public function setRodado(int $rodado): void
    {
        $this->rodado = $rodado;
    }

    /**
     * @return string
     */
    public function getImagen(): string
    {
        return $this->imagen;
    }

    /**
     * @param string $imagen
     */
    public function setImagen(string $imagen): void
    {
        $this->imagen = $imagen;
    }

    /**
     * @return string
     */
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     */
    public function setAlt(string $alt): void
    {
        $this->alt = $alt;
    }

    /**
     * @return string
     */
    public function getBanner(): string
    {
        return $this->banner;
    }

    /**
     * @param string $banner
     */
    public function setBanner(string $banner): void
    {
        $this->banner = $banner;
    }


    /**
     * @return string
     */
    public function getCategoria(): string
    {
        return $this->categoria;
    }

    /**
     * @param string $categoria
     */
    public function setCategoria(string $categoria): void
    {
        $this->categoria = $categoria;
    }

    /**
     * @return string
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     */
    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return array
     */
    public function getCaracteristicas(): array
    {
        return $this->caracteristicas;
    }

    /**
     * @param array $caracteristicas
     */
    public function setCaracteristicas(array $caracteristicas): void
    {
        $this->caracteristicas = $caracteristicas;
    }






}