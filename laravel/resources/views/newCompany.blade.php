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
    if (localStorage.getItem("token") !== TOKEN) location.href = "/login";
</script>
<script>
    const logout = () => {
        localStorage.clear()
        location.href = "/login";
    };
</script>
<style>
    header > a, header > button, th, td {
        border: 1px solid black;
        margin: 2px;
        width: 400px;
    }
</style>
<body>
    <header>
        <a href="/">出展企業一覧</a>
        <a href="/newCompany">出展企業登録</a>
        <a href="/login">ログイン</a>
        <button onclick="logout()">ログアウト</button>
    </header>
    <p>
        企業名 : 
        <input type="text">
    </p>
    <p>
        住所 : 
        <input type="text">
    </p>
    <p>
        電話番号 : 
        <input type="text">
    </p>
    <p>
        電子メール : 
        <input type="text">
    </p>
    <p>
        備考 : 
        <textarea cols="30" rows="10"></textarea>
    </p>
    <button onclick="newCompany()">登録</button>
    <script>
        const inputs = document.querySelectorAll("input");
        const textarea = document.querySelector("textarea");
        function newCompany() {
            const data = {
                companyName: inputs[0].value.length === 0 ? "未入力です" : inputs[0].value,
                companyAddress: inputs[1].value.length === 0 ? "未入力です" : inputs[1].value,
                phoneNumber: inputs[2].value.length === 0 ? "未入力です" : inputs[2].value,
                mail: inputs[3].value.length === 0 ? "未入力です" : inputs[3].value,
                other: textarea.value.length === 0 ? "未入力です" : textarea.value,
            }
            const param = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data),
            };
            fetch("/api/company", param)
                .then(res => res.json())
                .then(data => {
                    window.alert("企業情報が登録されました");
                    location.href = "/";
                });
        }
    </script>
</body>
</html>
