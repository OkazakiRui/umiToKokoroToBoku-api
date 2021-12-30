<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<script>
    const TOKEN = "21232f297a57a5a743894a0e4a801fc3";
    if (localStorage.getItem("token") === TOKEN) location.href = "/";
</script>
<body>
  <h3>ログイン画面</h3>
  <p>
    username : 
    <input type="text" name="username" value="admin">
  </p>
  <p>
    password : 
    <input type="password" name="password" value="gorin">
  </p>
  <p id="err"></p>
  <button onclick="submit()">ログイン</button>
  <script>
    document.getElementById("err").textContent = localStorage.getItem("token");
  </script>
  <script>    
    function submit() {
      const inputs = document.querySelectorAll("input");
      const data = {
        username: inputs[0].value,
        password: inputs[1].value,
      };
      const param = {
          method: "post",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify(data),
      };
      fetch("/api/login", param)
          .then((res) => res.text())
          .then((data) => {
            localStorage.setItem("token", data);
            location.href = "/";
          });
    };
  </script>
  <script>
    // window popstate で画面遷移先で reload される
    window.addEventListener("popstate", () => {});
  </script>
</body>
</html>