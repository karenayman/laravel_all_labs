<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   public $product=[
        1 => ['id' => '1' ,'name' => 'camira','price' => '200000','img' => 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'],
        2 => ['id' => '2' ,'name' => 'phone','price' => '100000','img' => 'https://shop.orange.eg/content/images/thumbs/0004376_iphone-13_550.jpeg'],
        3 => ['id' => '3' ,'name' => 't-shirt','price' => '100','img' => 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1621283126-t-shirts-buckmason-black-slub-1621282639.jpg'],
        4 => ['id' => '4' ,'name' => 'headphones','price' => '300','img' => 'https://damassets.autodesk.net/content/dam/autodesk/www/products/autodesk-3dsmax/fy22/overview/use-cases/real-time-rendering-product-design-thumb-572x340.jpg'],
        5 => ['id' => '5' ,'name' => 'watch','price' => '2000','img' => 'https://primeambassador.com/assets/images/share/mens-watches.jpg'],
        6 => ['id' => '6' ,'name' => 'camira','price' => '200000','img' => 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'],
        7 => ['id' => '7' ,'name' => 'camira','price' => '200000','img' => 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'],
        8 => ['id' => '8' ,'name' => 'camira','price' => '200000','img' => 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'],
        9 => ['id' => '9' ,'name' => 'camira','price' => '200000','img' => 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'],
        10 => ['id' => '10' ,'name' => 'camira','price' => '200000','img' => 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'],
        11 => ['id' => '11' ,'name' => 'camira','price' => '200000','img' => 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'],
        12 => ['id' => '12' ,'name' => 'camira','price' => '200000','img' => 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500']
    ];
    public function home()
    {
       
        //to send data from controller to html
        $category = [
            1 => ['name' => 'phones' ,'photo' => 'https://www.cnet.com/a/img/iJxo9AIxiXHqVoqm6nGISKtKwPI=/2020/08/18/b7168aea-9f7e-47bb-9f31-4cb8ad92fbc7/lg-note-20-ultra-5g-iphone-11-se-google-pixel-4a-lg-velvet-6133.jpg'],
            2 => ['name' => 'watches' ,'photo' => 'https://www.pascoes.co.nz/content/category/0146134001626301481.jpg?width=1310&height=655&fit=crop&q=60'],
            3 => ['name' => 'sports wear' ,'photo' => 'https://s.alicdn.com/@sc04/kf/H2e5cd1ee43734674bd32d8b735a28bbeP.jpg_300x300.jpg'],
            4 => ['name' => 'other' ,'photo' => 'https://images.squarespace-cdn.com/content/v1/5ce6b71ffa1d5e00011ea4c1/1558656042628-TLVV9SBNT6KY7S3ZBP9X/CATEGORY+OTHER+LOGO+1.jpg']
        ];
       
        // $category=['phones','watches','sports wear','others'];
        return view("welcome",['cat' => $category , 'pro'=> $this->product]);
    }
    public function product_details($id)
    {

        return view("product_details", ['pro'=> $this->product[$id]]);
    }
}
