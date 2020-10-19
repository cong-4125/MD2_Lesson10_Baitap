<?php
 include_once 'Dancer.php';

 $dacer1 = new Dancer("cong",'nam');
 $dacer2 = new Dancer("duong",'nam');
 $dacer3 = new Dancer("trong",'nam');
 $dacer4 = new Dancer("dung",'nam');


 $dacer5 = new Dancer("trinh",'nu');
 $dacer6 = new Dancer("thuy",'nu');
 $dacer7 = new Dancer("dao",'nu');

 $queue1 = new SplQueue();
 $queue2 = new SplQueue();

$queue1->enqueue($dacer1);
$queue1->enqueue($dacer2);
$queue1->enqueue($dacer3);
$queue1->enqueue($dacer4);

$queue2->enqueue($dacer5);
$queue2->enqueue($dacer6);
$queue2->enqueue($dacer7);

 function check($queue1,$queue2){
     if($queue1->isEmpty() || $queue2->isEmpty()){
         echo "Doi mot chut";

     }else {
        $n1 = $queue1->pop();
        $n2 = $queue2->pop();
        return $n1->getName()."-".$n2->getName();
     }
 }
 echo check($queue1,$queue2)."<br>";
 echo check($queue1,$queue2).'<br>';
 echo check($queue1,$queue2)."<br>";
 echo check($queue1,$queue2).'<br>';

 $dancer8 = new Dancer('hang','nu');
 $dancer9 = new Dancer('chau','nu');
 $dancer10 = new Dancer('anh','nu');


 $queue2->enqueue($dancer8);
 $queue2->enqueue($dancer9);
 $queue2->enqueue($dancer10);

echo check($queue1,$queue2).'<br>';
function wait($queue1,$queue2){
    return (count($queue1) + count($queue2))."  Nguoidoi";
}
echo wait($queue1,$queue2);