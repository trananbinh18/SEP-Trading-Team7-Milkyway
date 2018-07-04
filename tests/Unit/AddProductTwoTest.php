<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AddProductTwoTest extends TestCase
{
    /**
     * Usecase-ID: TC-ADD-15
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithBlankExistInAnyField()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => '',
        	'imagesGCN' => '',
        	'cbCategory' => 4,
        	'Soluong' => '',
        	'Giasanpham' => '',
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => ''
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);
    }
    /**
     * Usecase-ID: TC-ADD-16
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithUnvalidProductPriceType()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 20,
        	'Giasanpham' => 'abc',
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);
    }
    /**
     * Usecase-ID: TC-ADD-17
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithQuantityOfProductIsUnvalidType()
    {
    	$respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->withSession(['userid' => 2])->json('POST', '/CreateProduct', [
        	'tensanpham' => 'Cải Xanh',
        	'imagesSP' => UploadedFile::fake()->image('caixanh.jpg'),
        	'imagesGCN' => UploadedFile::fake()->image('5.jpg'),
        	'cbCategory' => 4,
        	'Soluong' => 'ab',
        	'Giasanpham' => 50000,
        	'cdDonvi' => 'Kilogram',
        	'mieutasanpham' => 'Rau xanh tươi vừa mới trồng xong'
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);
    }
    /**
     * Usecase-ID: TC-ADD-18
     * @return boolean
     */
    public function testBuyerAddProductUnsuccessfulWithProductDescriptionIsBlank()
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
        	'mieutasanpham' => ''
        ]);

        $this->assertDatabaseMissing('sanpham', [
        	'TENSP' => 'Cải Xanh'
    	]);
    }
}
