<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class MountVolumeOptionsDriverConfig
{
    /**
     * Name of the driver to use to create the volume.
     *
     * @var string
     */
    protected $name;
    /**
     * key/value map of driver specific options.
     *
     * @var string[]
     */
    protected $options;

    /**
     * Name of the driver to use to create the volume.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the driver to use to create the volume.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * key/value map of driver specific options.
     *
     * @return string[]
     */
    public function getOptions(): ?\ArrayObject
    {
        return $this->options;
    }

    /**
     * key/value map of driver specific options.
     *
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(?\ArrayObject $options): self
    {
        $this->options = $options;

        return $this;
    }
}
