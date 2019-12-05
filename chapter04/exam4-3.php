<?
$score="68";
echo "คุณได้คะแนน " . $score;

if ($score>=80 && $score<=100) {
	echo "ยินดีด้วยครับ คุณได้เกรด A";
} else if ($score >=70 && $score < 80) {
	echo "คุณได้เกรด B";
} else if ($score >=60 && $score < 70) {
	echo "คุณได้เกรด C";	
} else if ($score >=50 && $score < 60) {
	echo "คุณได้เกรด D";
} else {
	echo "กรุณาระบุคะแนนด้วยครับ";
}
?>
