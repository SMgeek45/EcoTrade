<?php

namespace App\Entity;

use App\Repository\ParticipantsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParticipantsRepository::class)
 */
class Participants
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
    private $participant_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $challenge_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParticipantId(): ?int
    {
        return $this->participant_id;
    }

    public function setParticipantId(int $participant_id): self
    {
        $this->participant_id = $participant_id;

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

    public function getChallengeId(): ?int
    {
        return $this->challenge_id;
    }

    public function setChallengeId(int $challenge_id): self
    {
        $this->challenge_id = $challenge_id;

        return $this;
    }
}
