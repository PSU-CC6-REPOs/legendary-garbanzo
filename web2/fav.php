<html>
<head><title>Your Favorite</title></head>
<body>
    const form = document.querySelector('form');
const submitBtn = document.querySelector('button[type="submit"]');


submitBtn.addEventListener('click', function(event) {
  event.preventDefault(); // prevent the form from submitting and refreshing the page

  const nameInput = form.querySelector('input[name="name"]');
  const dishInput = form.querySelector('input[name="dish"]');
  const colorInput = form.querySelector('input[name="color"]');

  if (nameInput.value.trim() !== '') { // check if name input is not empty
    if (dishInput.value.trim() !== '' && colorInput.value.trim() !== '') { // check if dish and color inputs are not empty
     
      alert(`You really enjoy ${dishInput.value} - especially with a nice ${colorInput.value} wine`);
    } else {
    
      alert('Please fill in both the dish and color fields');
    }
  } else {
 
    alert('Please enter your name');
  }
});
    <?php
        
    ?>
</body>
</html>
