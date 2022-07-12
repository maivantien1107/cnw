<?php  
 require_once ROOT . DS .'mvc'.DS. 'models'. DS . 'News.php';
 class NewsDescription extends News{
    private $des1;   //string
    private $des2; //string   //string
    private $des3;   //string
    private $des4;   //string
    private $des5;   //string
    private $des6;   //string
    private $des7;   //string
    private $image1; //string
    private $image2; //string
    private $image3; //string
 
 public function __construct($news_id, $title,$category, $description,$time, $img, $overview,$des1,$des2,$des3,$des4,$des5,$des6,$des7,$image1,$image2,$image3){
    parent::__construct($news_id,$title,$category,$description,$time,$img,$overview);
    self::setDes1($des1);
    self::setDes2($des2);
    self::setDes3($des3);
    self::setDes4($des4);
    self::setDes5($des5);
    self::setDes6($des6);
    self::setDes7($des7);
    self::setImage1($image1);
    self::setImage2($image2);
    self::setImage3($image3);
 }
 public function getDes1(){ 
   return $this->des1;
 }
 public function getDes2(){
    return $this->des2;
 }
 public function getDes3(){ 
    return  $this->des3;
 }
 public function getDes4(){  
    return  $this->des4;
 }
 public function getDes5(){  
    return  $this->des5;
 }
 public function getDes6(){  
    return  $this->des6;
 }
 public function getDes7(){ 
    return  $this->des7;
 }
 public function getImage1(){
    return  $this->image1;
 }
 public function getImage2(){
    return $this->image2;
 }
 public function getImage3(){
    return  $this->image3;
 }
 public function setDes1($des1){
    $this->des1 = $des1;
 }
 public function setDes2($des2){
    $this->des2 = $des2;
 }
 public function setDes3($des3){
    $this->des3 = $des3;
 }
 public function setDes4($des4){
    $this->des4 = $des4;
 }
 public function setDes5($des5){
    $this->des5 = $des5;
 }
 public function setDes6($des6){
    $this->des6 = $des6;
 }
 public function setDes7($des7){
    $this->des7 = $des7;
 }
 public function setImage1($image1){
    $this->image1 = $image1;
 }
 public function setImage2($image2){
    $this->image2 = $image2;
 }
 public function setImage3($image3){
    $this->image3 = $image3;
 }
}
?>