<!DOCTYPE html>
<html>
<body>

<h2 class="example">A heading with class="example"</h2>
<p class="example">A paragraph with class="example".</p>

<p>Click the button to add a background color all elements with class="example".</p>

<button onclick="myFunction()">Try it</button>

<p><strong>Note:</strong> The querySelectorAll() method is not supported in Internet Explorer 8 and earlier versions.</p>

<script>
function myFunction() {
  var x, i;
  x = document.querySelectorAll(".example");
  for (i = 0; i < x.length; i++) {
    x[i].style.backgroundColor = "red";
  }
}
</script>

</body>
</html>
