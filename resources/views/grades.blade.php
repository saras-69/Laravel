@if ($marks>=80 && $marks<=100)
<p style="color:green">Grade O<p>   
@elseif($marks>=60 && $marks<80)
Grade B
@elseif($marks>=40 && $marks<60)
Grade C
@else
<p style="color: red">Fail</p>
@endif