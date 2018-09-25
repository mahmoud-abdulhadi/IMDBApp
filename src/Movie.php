<?php 

class Movie {


    protected $title ; 
    protected $rating ;
    
    protected $isWatched  = false ; 


     function __construct($title){

        $this->title = $title  ; 
    }


    public function watch(){

        $this->isWatched = true ; 
        
    }

    public function setRating($rating)
    {


        $this->ValidateRatingRange($rating); 
        

        $this->rating = $rating ; 
    }

    public function getRating()
    {
       return $this->rating ; 
    }

    protected function validateRatingRange($rating){

        if($rating > 5 || $rating < 0)
            throw new InvalidArgumentException ; 
    }

    public function isWatched()
    {
       return $this->isWatched ; 
    }

    public function getTitle()
    {
        return $this->title ; 
    }

    public function setTitle($title)
    {
       
        $this->validateTitle($title); 

        $this->title = $title ; 
    }

    protected function validateTitle($title){


        if (!$title)
            throw new InvalidArgumentException ; 
    }
}
