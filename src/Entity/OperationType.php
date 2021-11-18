<?php

namespace App\Entity;

use App\Repository\OperationTypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OperationTypeRepository::class)
 */
class OperationType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $operation_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $operation_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOperationId(): ?int
    {
        return $this->operation_id;
    }

    public function setOperationId(int $operation_id): self
    {
        $this->operation_id = $operation_id;

        return $this;
    }

    public function getOperationName(): ?string
    {
        return $this->operation_name;
    }

    public function setOperationName(string $operation_name): self
    {
        $this->operation_name = $operation_name;

        return $this;
    }
}
