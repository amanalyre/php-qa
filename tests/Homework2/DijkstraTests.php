<?php

namespace Day2\Homework2;

use Day2\Homework2\Dijkstra;
use PHPUnit\Framework\TestCase;

class DijkstraTest extends TestCase
{
    public function test_with_one_move()
    {
        $oneMove = new Dijkstra();
        $this->assertEquals('a - b', $oneMove->getLiteralShortestPath('a', 'b', $route[] = array('from'=>'a', 'to'=>'b', 'price'=>600)));
    }

    public function test_no_such_point()
    {
        $oneMove = new Dijkstra();
        $this->assertEquals('Unable to find f in the Graph', $oneMove->printShortestPath('a', 'f', $routes[] = array('from'=>'a', 'to'=>'b', 'price'=>600)));
    }

    public function test_no_such_point()
    {
        $oneMove = new Dijkstra();
        $this->assertEquals('a - b - d', $oneMove->getLiteralShortestPath('a', 'f', $routes[] = array('from'=>'a', 'to'=>'b', 'price'=>600)));
    }
}

$routes = array();
$routes[] = array('from'=>'a', 'to'=>'b', 'price'=>100);
$routes[] = array('from'=>'c', 'to'=>'d', 'price'=>300);
$routes[] = array('from'=>'b', 'to'=>'c', 'price'=>200);
$routes[] = array('from'=>'a', 'to'=>'d', 'price'=>900);
$routes[] = array('from'=>'b', 'to'=>'d', 'price'=>300);