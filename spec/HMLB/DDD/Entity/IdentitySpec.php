<?php

namespace spec\HMLB\DDD\Entity;

use HMLB\DDD\Entity\Identity;
use PhpSpec\ObjectBehavior;

class IdentitySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('HMLB\DDD\Entity\Identity');
    }

    public function it_should_cast_as_string()
    {
        $this->__toString()->shouldBeString();
    }

    public function it_is_comparable()
    {
        $value = '12948739432802948324-aiezufshgsidufhsodrfhqsldjkghlskgjhdfg';
        $this->beConstructedWith($value);
        $other = new Identity($value);
        $this->equals($other)->shouldBe(true);
        $nope = new Identity($value.'1');
        $this->equals($nope)->shouldBe(false);
    }

    public function it_should_be_initializable()
    {
        $value = '12948739432802948324-aiezufshgsidufhsodrfhqsldjkghlskgjhdfg';
        $this->beConstructedWith($value);
        $this->__toString()->shouldBe($value);
    }
}
