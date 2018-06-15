<?php
namespace App\Parser;
 use App\Parser\ParseContract;
use Symfony\Component\DomCrawler\Crawler;
use App\News;



class Google implements ParseContract{
use ParseTraite;
public $url;
public function getParse($path){
    $file=file_get_contents($path);    
   $crawler=new Crawler($file);
    //$hap=$crawler->filter('body')->html();
    //$text=$this->text($crawler,'body');
    $crawler->filter('.white-frame')->each(function(Crawler $node,$i){
        $lin=$node->html();
        $name=$node->filter('h3')->text();
        //$description=$node->filter('p')->text();
        $description=$this->text($node,'p');
        $picture=$node->filter('img')->attr('src');
        //echo $description."<br/>";
        $obj=News::where('name',$name) ->first(); if(!$obj){ $obj=new News; $obj->name=$name;$obj->picture="https://www.segodnya.ua".$picture; $obj->discription=$description; $obj->save(); }
        
    });
        
    }
    //return   $text;
    
}
