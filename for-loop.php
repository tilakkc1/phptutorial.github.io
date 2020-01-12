<select>
<?php
    for($x = 2020; $x>=1980; $x--){
        echo "<option> $x </option>";
    }
?>
</select>

<?php 
$months = array("","Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
?>
<select>
<?php
for($x = 1; $x<= 12; $x++){
    echo"<option monthId='$x'> $months[$x] </option>";
}
?>
</select>
<select>
<?php 
for($x = 1; $x<=30; $x++){
    echo "<option>$x </option>";
}
?>
</select>