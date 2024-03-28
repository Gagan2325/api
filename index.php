<?php
include_once './db/index.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    axios.post('http://localhost:8080/api/api/?action=post', {
    firstName: 'Fred',
    lastName: 'Flintstone'
  })
  .then(function (response) {
    alert(response.data[0][1]);
  })
  .catch(function (error) {
    console.log(error);
  });
</script>
</html>