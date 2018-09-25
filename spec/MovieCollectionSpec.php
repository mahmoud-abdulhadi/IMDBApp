<?php

namespace spec;

use MovieCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Movie ; 

class MovieCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MovieCollection::class);
    }

    function it_stores_a_collection_of_movies(Movie $movie){

        $this->add($movie) ;
        
        $this->shouldHaveCount(1);
    }

    function it_can_add_multiple_movies_at_once(Movie $movie1,Movie $movie2){


        $this->add([$movie1,$movie2]);
        
        $this->shouldHaveCount(2);
    }

    function it_can_mark_all_movies_as_watched(Movie $movie1 , Movie $movie2){


        $this->add([$movie1,$movie2]);
        
        $this->markAllAsWatched(); 

        $movie1->watch()->shouldBeCalled(); 

        $movie2->watch()->shouldBeCalled(); 
        

    }
}
