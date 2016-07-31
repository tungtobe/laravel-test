<?php
use App\Product;

class ProductTest extends PHPUnit_Framework_TestCase {

    protected $product;

    public function setUp() {
        $this->product = new Product('Fallout 4', 59);
    }

/** @test */
    function a_product_has_a_name() {

        $this->assertEquals('Fallout 4', $this->product->
                name());
    }

    /** @test */
    function a_product_has_a_cost() {

        $this->assertEquals(59, $this->product->cost());
    }
}