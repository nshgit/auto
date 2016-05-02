<?php
use yii\helpers\Html;
use yii\db\Query;

/* @var $this yii\web\View */
/* @var $searchModel app\models\admin\search\AutosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Автомобили';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
<?php
$rows = (new Query())
    ->select(['auto.id', 'auto.category_id', 'auto.marka_id', 'auto.name', 'auto.content', 'auto.date', 'category.name as category_name', 'marka.name as marka_name', 'auto_id', 'attribute_id', 'value', 'attribute.id as id_attribute', 'attribute.name as attribute_name'])
    ->from('auto')
    ->join('LEFT JOIN', 'value', 'auto.id = auto_id')
    ->join('LEFT JOIN',  'category', 'category_id = category.id')
    ->join('LEFT JOIN', 'marka', 'marka_id = marka.id')
    ->join('LEFT JOIN', 'attribute', 'attribute.id = attribute_id')
    ->all();
//echo '<pre>';
//print_r($rows);
echo '<table class="table table-striped table-bordered">';
$thead = "<thead style= 'color:red; font:bold 17px Arial '>" 
        . "<tr>"
        . "<td>№</td>"
        . "<td>Категория</td>"
        . "<td>Марка</td>"
        . "<td>Модель</td>"
        . "<td>Описание</td>"
        . "<td>Дата производства</td>"
        . "<td>Характеристики</td>"
        . "</tr>"
        . "</thead>";
echo $thead;

foreach ($rows as $row)
{   
    $a;
    if(!$a)
    {
    $id             = $row['id'];
    $category_name  = $row['category_name'];
    $marka_name     = $row['marka_name'];
    $name           = $row['name'];
    $content        = $row['content'];
    $date           = $row['date'];
    if(!empty($row['attribute_name']) && !empty($row['value']))
    {
        $attr       = $row['attribute_name'].':'.$row['value'];
    }else
    {
        $attr = "";
    }
    
    $a = $row['id'];
    }elseif($a === $row['id']){
        $attr = $attr.'</br>'.$row['attribute_name'].':'.$row['value'];
    }else{
        $stroka = "<tr>"
                . "<td>$id</td>"
                . "<td>$category_name</td>"
                . "<td>$marka_name</td>"
                . "<td>$name</td>"
                . "<td>$content</td>"
                . "<td>$date</td>"
                . "<td>$attr</td>"
                . "</tr>";
        echo $stroka;
        
        
        $id             = $row['id'];
        $category_name  = $row['category_name'];
        $marka_name     = $row['marka_name'];
        $name           = $row['name'];
        $content        = $row['content'];
        $date           = $row['date'];
        if(!empty($row['attribute_name']) && !empty($row['value']))
        {
            $attr       = $row['attribute_name'].':'.$row['value'];
        }else
        {
            $attr = "";
        }
        
        $a = $row['id'];
    }
    
}
$stroka = "<tr>"
                . "<td>$id</td>"
                . "<td>$category_name</td>"
                . "<td>$marka_name</td>"
                . "<td>$name</td>"
                . "<td>$content</td>"
                . "<td>$date</td>"
                . "<td>$attr</td>"
                . "</tr>";
        echo $stroka;
echo '</table>';
?>    
   
   
</div>
