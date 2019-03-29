<?php

namespace Brunoferreiras\Solid;

use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase
{
    public function testExample()
    {
        $html = new Html;
        $img = $html->img('images/photo.jpg');

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }
}
