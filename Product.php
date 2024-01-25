<?php

class Product{
    private $id;
    private $name;
    private $source;
    private $price;
    private $category;
    private $section;
    private $quantity;
    private $cartId;
    private $new;
    function __construct($id,$name,$source,$price,$category,$section,$quantity,$cartId,$new){
        $this->id = $id;    
        $this->name = $name;    
        $this->source = $source;    
        $this->price = $price;  
        $this->category = $category;
        $this->section = $section;
        $this->quantity = $quantity;
        $this->cartId = $cartId;
        $this->new = $new;
    }

    public function getId(){  
        return $this->id;
     }
     public function getName(){
        return $this-> name;
     }
     public function getSource(){
        return $this->source;
     }
     public function getPrice(){
        return $this->price;
     }
     public function getCategory(){
        return $this->category;
     }
     public function getSection(){
        return $this->section;
     }
     public function getQuantity(){
        return $this->quantity;
    }
    public function getCartId(){
        return $this->cartId;
    }
    public function getNew(){
        return $this->new;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function setSource($source){
        $this->source = $source;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setCategory($category){
        $this->category = $category;
    }
    public function setSection($section){
        $this->section = $section;
    }
    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
    public function setCartId($cartId){
        $this->cartId = $cartId;
    }
    public function setNew($new){
        $this->new = $new;
    }
  }



?>