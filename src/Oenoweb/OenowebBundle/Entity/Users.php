<?php
namespace Oenoweb\OenowebBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;


/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Oenoweb\OenowebBundle\Repository\UsersRepository")
 * @ORM\Table(name="users")
 * @ExclusionPolicy("all")
 */
class Users extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     */
    protected $id;
    public function getUsedName($separator = ' '){
            return $this->getUsername();
    }
}