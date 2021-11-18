<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact
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
    private $subscriber_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $userSubscriber_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubscriberId(): ?int
    {
        return $this->subscriber_id;
    }

    public function setSubscriberId(int $subscriber_id): self
    {
        $this->subscriber_id = $subscriber_id;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getUserSubscriberId(): ?int
    {
        return $this->userSubscriber_id;
    }

    public function setUserSubscriberId(int $userSubscriber_id): self
    {
        $this->userSubscriber_id = $userSubscriber_id;

        return $this;
    }
}
