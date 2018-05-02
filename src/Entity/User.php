<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    private $website;
    /**
     * @ORM\Column(type="string")
     */
    private $linkedin;
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return null|string
     */
    public function getWebsite()
    {
        return $this->website;
    }
    /**
     * @param string $website
     *
     * @return User
     */
    public function setWebsite(string $website): ?string
    {
        return $this->website = $website;
    }
    public function getLinkedin()
    {
        return $this->linkedin;
    }
    public function setLinkedin(string $linkedin): ?string
    {
        return $this->linkedin = $linkedin;
    }
}
