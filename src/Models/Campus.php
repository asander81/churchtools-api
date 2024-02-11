<?php

namespace CTApi\Models;

use CTApi\Models\Traits\FillWithData;
use CTApi\Models\Traits\MetaAttribute;
use CTApi\Requests\AppointmentRequestBuilder;

class Campus extends AbstractModel
{
    use FillWithData, MetaAttribute;

    protected ?string $name = null;
    protected ?string $shorty = null;
    protected ?string $address = null;
    protected ?Meta $meta = null;

    protected function fillArrayType(string $key, array $data): void
    {
        if ($key == "meta") {
            $this->meta = Meta::createModelFromData($data);
        } else {
            $this->fillDefault($key, $data);
        }
    }

    /**
     * @param string|null $id
     * @return Campus
     */
    public function setId(?string $id): Campus
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Campus
     */
    public function setName(?string $name): Campus
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getShorty(): ?string
    {
        return $this->shorty;
    }

    /**
     * @param string|null $shorty
     * @return Campus
     */
    public function setShorty(?string $icalLocation): Campus
    {
        $this->shorty = $shorty;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     * @return Campus
     */
    public function setAddress(?string $address): Campus
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return Meta|null
     */
    public function getMeta(): ?Meta
    {
        return $this->meta;
    }

    /**
     * @param Meta|null $meta
     * @return Campus
     */
    public function setMeta(?Meta $meta): Campus
    {
        $this->meta = $meta;
        return $this;
    }
}
