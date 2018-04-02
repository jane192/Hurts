<?php
namespace App\Parser;
 use App\Parser\ParseContract;
use Symfony\Component\DomCrawler\Crawler;


class Google implements ParseContract{

public $url;
public function getParse($path){
    $file=file_get_contents($path);
    $file=file_get_contents($path);
   $crawler=new Crawler($file);
    $hap=$crawler->filter('body')->html();
    
    return   $hap;
    
}
 
}
