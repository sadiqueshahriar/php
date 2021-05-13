<form>

Enter your course fee
<input type ="text" id="fee" /></br>
Enter your course qty
<input type ="text" id="qty" /></br>
Enter your sales commission
<input type ="text" id="commission" /></br>
<button onclick="get_name()">get in to</button>



</form>

<script>

function get_name(){

  var fee=document.getElementById("fee").value;
  var qty=document.getElementById("qty").value;
  var commission=document.getElementById("commission").value;

  alert(fee);
  alert(qty);
  alert(commission);


}






</script>
