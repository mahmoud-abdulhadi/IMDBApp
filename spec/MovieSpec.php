<?php

namespace spec;

use Movie;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Beirut');

        $this->shouldBeAnInstanceOf('Movie');
    }

    function it_can_be_rated(){

        $this->setRating(5);

        $this->getRating()->shouldBe(5);
    
    }

    function it_can_update_the_title(){

        $this->setTitle('Avatar'); 

        $this->getTitle()->shouldBe('Avatar');
    }

    function its_rating_should_not_exceeds_five(){

        $this->shouldThrow('InvalidArgumentException')
            ->duringSetRating(8); 
    }

    function it_can_be_marked_as_watched(){

        $this->watch(); 

        $this->shouldbeWatched();
    }

    function it_can_fetch_the_title(){

        $this->getTitle()->shouldBe('Beirut'); 
    }

    function it_validates_title(){

        $this->shouldThrow('InvalidArgumentException')
            ->duringSetTitle('');
    }
}
