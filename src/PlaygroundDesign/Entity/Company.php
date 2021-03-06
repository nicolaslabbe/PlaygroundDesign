<?php

namespace PlaygroundDesign\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Mapping\PreUpdate;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;


/**
 * @ORM\Entity @HasLifecycleCallbacks
 * @ORM\Table(name="company")
 */
class Company implements CompanyInterface, InputFilterAwareInterface
{

    protected $inputFilter;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * title
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     * address
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $address;

    /**
     * phoneNumber
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    protected $phoneNumber;

    /**
     * facebookPage
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $facebookPage;

    /**
     * twitterAccount
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $twitterAccount;

    /**
     * @ORM\Column(name="main_image", type="string", length=255, nullable=true)
     */
    protected $mainImage;

    /**
     * @param string $title
     * @return Company
     */
    public function setId($id)
    {
        $this->id = (string) $id;

        return $this;
    }

    /**
     * @return string $title
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $title
     * @return Company
     */
    public function setTitle($title)
    {
        $this->title = (string) $title;

        return $this;
    }

    /**
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $address
     * @return Company
     */
    public function setAddress($address)
    {
        $this->address = (string) $address;

        return $this;
    }

    /**
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $phoneNumber
     * @return Company
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = (string) $phoneNumber;

        return $this;
    }

    /**
     * @return string $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $facebookPage
     * @return Company
     */
    public function setFacebookPage($facebookPage)
    {
        $this->facebookPage = (string) $facebookPage;

        return $this;
    }

    /**
     * @return string $facebookPage
     */
    public function getFacebookPage()
    {
        return $this->facebookPage;
    }

    /**
     * @param string $twitterAccount
     * @return Company
     */
    public function setTwitterAccount($twitterAccount)
    {
        $this->twitterAccount = (string) $twitterAccount;

        return $this;
    }

    /**
     * @return string $twitterAccount
     */
    public function getTwitterAccount()
    {
        return $this->twitterAccount;
    }


    /**
     *
     * @return the $mainImage
     */
    public function getMainImage()
    {
        return $this->mainImage;
    }

    /**
     *
     * @param field_type $mainImage
     */
    public function setMainImage($mainImage)
    {
        $this->mainImage = $mainImage;

        return $this;
    }


    public function getArrayCopy()
    {
        return get_object_vars($this);
    }

    /**
     * Populate from an array.
     *
     * @param array $data
     */
    public function populate($data = array())
    {
        if (isset($data['title']) && $data['title'] != null) {
            $this->title = $data['title'];
        }
        if (isset($data['address']) && $data['address'] != null) {
            $this->address = $data['address'];
        }
            if (isset($data['phoneNumber']) && $data['phoneNumber'] != null) {
            $this->phoneNumber = $data['phoneNumber'];
        }
        if (isset($data['facebookPage']) && $data['facebookPage'] != null) {
            $this->facebookPage = $data['facebookPage'];
        }
        if (isset($data['twitterAccount']) && $data['twitterAccount'] != null) {
            $this->twitterAccount = $data['twitterAccount'];
        }
        if (isset($data['mainImage']) && $data['mainImage'] != null) {
            $this->mainImage = $data['mainImage'];
        }
    }



    /**
    * setInputFilter
    * @param InputFilterInterface $inputFilter
    */
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    /**
    * getInputFilter
    *
    * @return  InputFilter $inputFilter
    */
    public function getInputFilter()
    {
         if (!$this->inputFilter) {
            $inputFilter = new InputFilter();
            $this->inputFilter = $inputFilter;
        }
        return $this->inputFilter;
    }
}
