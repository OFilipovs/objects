<?php
class Point {
    public $pointOne;
    public $pointTwo;


    function __construct($pointOne, $pointTwo)
    {
        $this -> pointOne = $pointOne;
        $this -> pointTwo = $pointTwo;

    }
    public function swapPoints($objectOne, $objectTwo){
        $swapOne = $objectOne->pointOne;
        $swapTwo = $objectOne->pointTwo;
        $switchOne = $objectTwo->pointOne;
        $switchTwo = $objectTwo->pointTwo;

        $objectOne->pointOne = $switchOne;
        $objectOne->pointTwo = $switchTwo;
        $objectTwo->pointTwo = $swapTwo;
        $objectTwo->pointOne =$swapOne;
    }
}
$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
$p1->swapPoints($p1, $p2);

echo "(" . $p1->pointOne . ", " . $p1->pointTwo . ")";
echo "(" . $p2->pointOne . ", " . $p2->pointTwo . ")";