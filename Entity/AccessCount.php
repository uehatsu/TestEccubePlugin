<?php

namespace Plugin\TestEccubePlugin\Entity;

use Plugin\TestEccubePlugin\Repository\AccessCountRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="plg_test_eccube_plugin_access_count")
 * @ORM\Entity(repositoryClass=AccessCountRepository::class)
 */
class AccessCount
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(name="count", type="bigint", options={"unsigned":true})
     */
    private $count;

    /**
     * @ORM\Column(name="create_date", type="datetimetz")
     */
    private $create_date;

    /**
     * @ORM\Column(name="update_date", type="datetimetz")
     */
    private $update_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCount(): ?string
    {
        return $this->count;
    }

    public function setCount(string $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->create_date;
    }

    public function setCreateDate(\DateTimeInterface $create_date): self
    {
        $this->create_date = $create_date;

        return $this;
    }

    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->update_date;
    }

    public function setUpdateDate(\DateTimeInterface $update_date): self
    {
        $this->update_date = $update_date;

        return $this;
    }
}
