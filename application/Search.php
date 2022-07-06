<?php 
require_once ROOT . DS . 'database' . DS . 'MySqlConnect.php';
 function Search($arrays){
            $list_search=array();
            $list_model=array();
            $list_featue=array();
            $list_color=array();
         foreach($arrays as $array){
            $query1="SELECT * FROM products where model like '%$array%'";
            $query2="SELECT * FROM products where featue like '%$array%'";
            $query3="SELECT * FROM products where color like '%$array%'";
                                            
            parent::addQuerry($query1);
            $result_model=parent::executeQuery();
            parent::addQuerry($query2);
            $result_featue=parent::executeQuery();
            parent::addQuerry($query3);
            $result_color=parent::executeQuery();
            while ($row=mysqli_fetch_array($result_featue)){
                $featue=$row['featue'];
                $list_featue[]=$featue;
            }
            while ($row=mysqli_fetch_array($result_model)){
                $model=$row['model'];
                $list_model[]=$model;
            }
            while ($row=mysqli_fetch_array($result_color)){
                $color=$row['color'];
                $list_color[]=$color;
            }
            $cnt1=0;
            $cnt2=0;$cnt3=0;
            foreach($list_model)

         }
}
?>