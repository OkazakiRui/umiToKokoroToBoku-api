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
    const toEdit = (id) => {
        location.href = `/edit/${id}`;
    }
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
    <table id="table">
        <tr>
            <th>企業名</th>
            <th>住所</th>
            <th>電話番号</th>
            <th>電子メール</th>
            <th>備考 </th>
            <th></th>
        </tr>
    </table>
    <script>
        window.addEventListener("load", () => {
            document.getElementById("table").innerHTML =
                "<tr><th>企業名</th><th>住所</th><th>電話番号</th><th>電子メール</th><th>備考 </th><th></th></tr>";
            fetch("/api/company")
            .then((res) => {
                return res.json();
            })
            .then((data) => {
                    data.forEach(
                        ({
                            companyName,
                            companyAddress,
                            phoneNumber,
                            mail,
                            other,
                            id,
                        }) => {
                            document.getElementById(
                                "table"
                            ).innerHTML += `<tr><td>${companyName}</td><td>${companyAddress}</td><td>${phoneNumber}</td><td>${mail}</td><td>${other}</td><td><button onclick="toEdit(${id})">edit</button></td></tr>`;
                        }
                    );
                }
            );
        });
        
    </script>    
</body>
</html>
