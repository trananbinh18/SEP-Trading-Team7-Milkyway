<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Cart;

class AddProductToShoppingCartTest extends TestCase
{
    /**
     * Usecase-ID: TC-APTSC-01
     * @return boolean
     */
    public function testBuyerCanAddProductToShoppingCartWithAllValidField()
    {
        $this->json('GET',  '/BuyProduct',['id'=> 73, 'quan' => 10]);

        $countProduct = Cart::count();

        $this->assertTrue($countProduct === 10);

        Cart::destroy();
    }
    /**
     * Usecase-ID: TC-APTSC-02
     * @return boolean
     */
    public function testBuyerCanAddProductToShoppingCartWithNumberIsOneCharacter()
    {
        $this->json('GET',  '/BuyProduct',['id'=> 68, 'quan' => 1]);

        $countProduct = Cart::count();

        $this->assertTrue($countProduct === 1);

        Cart::destroy();
    }
    /**
     * Usecase-ID: TC-APTSC-04
     * @return boolean
     */
    public function testBuyerCanAddProductToShoppingCartWithNumberIsThreeCharacters()
    {
        $this->json('GET',  '/BuyProduct',['id'=> 68, 'quan' => 100]);

        $countProduct = Cart::count();

        $this->assertTrue($countProduct === 100);

        Cart::destroy();
    }
    /**
     * Usecase-ID: TC-APTSC-04
     * @return boolean
     */
    public function testBuyerCanNotAddProductToShoppingCartWithNumberIsFoursCharacters()
    {
        $this->json('GET',  '/BuyProduct',['id'=> 68, 'quan' => 1000]);

        $countProduct = Cart::count();

        $this->assertTrue($countProduct === 0);

        Cart::destroy();
    }
    /**
     * Usecase-ID: TC-APTSC-05
     * @return boolean
     */
    public function testBuyerCanNotAddProductToShoppingCartWithNumberIsNegativeOne()
    {
        $this->json('GET',  '/BuyProduct',['id'=> 68, 'quan' => -1]);

        $countProduct = Cart::count();

        $this->assertTrue($countProduct === 0);

        Cart::destroy();
    }
    /**
     * Usecase-ID: TC-APTSC-06
     * @return boolean
     */
    public function testBuyerCanAddProductToShoppingCartWithValidInputFormat()
    {
        $this->json('GET',  '/BuyProduct',['id'=> 68, 'quan' => 1]);

        $countProduct = Cart::count();

        $this->assertTrue($countProduct === 1);

        Cart::destroy();
    }
    /**
     * Usecase-ID: TC-APTSC-06
     * @return boolean
     */
    public function testBuyerCanNotAddProductToShoppingCartWithUnvalidInputFormat()
    {
        $this->json('GET',  '/BuyProduct',['id'=> 68, 'quan' => 'test']);

        $countProduct = Cart::count();

        $this->assertTrue($countProduct === 0);

        Cart::destroy();
    }
}
