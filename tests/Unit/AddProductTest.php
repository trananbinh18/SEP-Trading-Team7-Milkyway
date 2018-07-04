<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AddProductTest extends TestCase
{
    /**
     * Usecase-ID: TC-ADD-01
     * @return boolean
     */
    public function testBuyerAddProductSuccessfulWithAllValidFields()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 20,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseHas('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);

    	DB::table('sanpham')->where('TENSP', '=', 'Cải Xanh')->delete();
    }
    /**
     * Usecase-ID: TC-ADD-02
     * @return boolean
     */
    public function testBuyerAddProductSuccessfulWithLengthOfProductNameIsTenCharacters()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh A',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 20,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseHas('sanpham', [
        	'TENSP' => 'Cải Xanh A'
    	]);

    	DB::table('sanpham')->where('TENSP', '=', 'Cải Xanh A')->delete();
    }
    /**
     * Usecase-ID: TC-ADD-03
     * @return boolean
     */
    public function testBuyerAddProductSuccessfulWithValidImageFormat()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 20,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseHas('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);

    	DB::table('sanpham')->where('TENSP', '=', 'Cải Xanh')->delete();
    }
    /**
     * Usecase-ID: TC-ADD-04
     * @return boolean
     */
    public function testBuyerAddProductSuccessfulWithQuantityOfProductIsTen()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 10,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseHas('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);

    	DB::table('sanpham')->where('TENSP', '=', 'Cải Xanh')->delete();
    }
    /**
     * Usecase-ID: TC-ADD-05
     * @return boolean
     */
    public function testBuyerAddProductSuccessfulWithPriceOfProductIsFourtyThousand()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 20,
        	'Giasanpham' => 40000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseHas('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);

    	DB::table('sanpham')->where('TENSP', '=', 'Cải Xanh')->delete();
    }
    /**
     * Usecase-ID: TC-ADD-06
     * @return boolean
     */
    public function testBuyerAddProductSuccessfulWithLengthOfProductDescriptionIsFourtyFiveCharacters()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 20,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong tại Việt Nam'
        ]);

        $this->assertDatabaseHas('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);

    	DB::table('sanpham')->where('TENSP', '=', 'Cải Xanh')->delete();
    }
    /**
     * Usecase-ID: TC-ADD-07
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithLengthOfProductNameIsThirtyFourCharacters()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh trồng ở cao nguyên đà lạt',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 20,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong tại Việt Nam'
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'Cải Xanh trồng ở cao nguyên đà lạt'
    	]);
    }
    /**
     * Usecase-ID: TC-ADD-08
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithLengthOfProductNameIsOneCharacter()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'C',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 20,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'C'
    	]);
    }
    /**
     * Usecase-ID: TC-ADD-09
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithUnvalidImageFormat()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.doc'),
        	'imagesGCN' => UploadedFile::fake()->image('5.doc'),
        	'cbCategory' => 4,
        	'Soluong' => 20,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);
    }
    /**
     * Usecase-ID: TC-ADD-10
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithQuantityOfProductIsTwoThousand()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 2000,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);
    }
    /**
     * Usecase-ID: TC-ADD-11
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithQuantityOfProductIsNegativeOne()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => -1,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);
    }
    /**
     * Usecase-ID: TC-ADD-12
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithPriceOfProductIsOver999999999()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 20,
        	'Giasanpham' => 1000000000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);
    }
    /**
     * Usecase-ID: TC-ADD-13
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithPriceOfProductIsNegativeTwenty()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => -20,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);
    }
    /**
     * Usecase-ID: TC-ADD-14
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithLengthOfProductDescriptionIs462Characters()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 20,
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'RauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuooooooRauuuuuuoooooo'
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);
    }
}
