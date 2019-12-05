<?  
$count=99;  
echo  "ขณะนี้มีผู้เข้าชมแล้ว : " . str_pad($count, 5, "0", STR_PAD_LEFT) . "<br>";

$phone="088470";
echo "หมายเลขโทรศัพท์ : "  . str_pad($phone, 10, "X", STR_PAD_RIGHT)."<br>";

$income=65000;
echo "รายได้รวม : "  . str_pad($income, 7, "X", STR_PAD_BOTH)."<br>";
?>