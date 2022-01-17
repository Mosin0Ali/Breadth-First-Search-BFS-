<?php
$queue= new SplQueue;
$start=1;
$visited=[0,0,0,0,0];
$adjMatrix=[
    [0,1,1,0,0],
    [1,0,0,1,1],
    [1,0,0,0,0],
    [0,1,0,0,0],
    [0,1,0,0,0],
];
echo "The travel path is : ".$start;
$visited[$start]=1;
$queue->enqueue($start);
while(! $queue->isEmpty()){
    $node=$queue->dequeue();
    for ($move=0; $move<5; $move++){
        if($adjMatrix[$node][$move] ==1 && $visited[$move]==0){
            echo  $move;
            $visited[$move]=1;
            $queue->enqueue($move);
        }
    }
}
?>