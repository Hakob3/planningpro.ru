<?php
// src/Entity/Task.php
namespace App\Entity;

use Symfony\Component\Routing\Annotation\Route;

class Task
{
//    /**
//     * @Assert\Type(type="App\Entity\Category")
//     * @Assert\Valid
//     */
//    protected $category;
    protected $text;
    protected $email;
    protected $images;
//    protected $date;
    protected $color;
    protected $geometry;

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getGeometry(): string
    {
        return $this->geometry;
    }

    public function setGeometry(string $geometry): void
    {
        $this->geometry = $geometry;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getImages(): string
    {
        return $this->images;
    }

    public function setImages($images): void
    {
        $this->images = $images;
    }


//    public function getdate(): ?\DateTime
//    {
//        return $this->date;
//    }
//
//    public function setDate(?\DateTime $date): void
//    {
//        $this->date = $date;
//    }

//    public function getCategory(): ?Category
//    {
//        return $this->category;
//    }
//
//    public function setCategory(?Category $category)
//    {
//        $this->category = $category;
//    }
}