<h4>โปรแกรมหาค่า BMI หรือค่าดัชนีมวลกาย</h4>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
    กรุณากรอกน้ำหนัก (กิโลกรัม)<br/>
    <input type="number" name="weight"><br/>
    กรุณากรอกความสูง (เซนติเมตร)<br/>
    <input type="number" name="height"><br/>
    <input type="submit" value="หาค่า BMI"><br/>   
</form>


<?php
    isset( $_POST['weight'] ) ? $weight = $_POST['weight'] : $weight = "";
    isset( $_POST['height'] ) ? $height = $_POST['height'] : $height = "";
    if( !empty( $weight ) && !empty( $height ) ) {
        $bmi = $weight / ( ( $height / 100 ) ** 2 );
        echo "น้ำหนักของคุณ คือ {$weight}<br/>";
        echo "ความสูงของคุณ คือ {$height}<br/>"; 
        echo "ค่า BMI หรือค่าดัชนีมวลกาย คือ ".number_format( $bmi, 2 )."<br/>"; 
    }
?>