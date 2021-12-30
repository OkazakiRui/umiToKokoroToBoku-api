const TOKEN = "21232f297a57a5a743894a0e4a801fc3";
// if (localStorage.getItem("token") !== TOKEN) location.href = "/login";

function toEdit(id) {
    location.href = `/edit/${id}`;
}

window.addEventListener("load", () => {
    document.getElementById("table").innerHTML =
        "<tr><th>企業名</th><th>住所</th><th>電話番号</th><th>電子メール</th><th>備考 </th><th></th></tr>";
    fetch("/api/company").then((res) => {
        res.json().then((data) => {
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
        });
    });
});

const submit = () => {
    const inputs = document.querySelectorAll("input");
    const data = {
        username: inputs[0],
        password: inputs[1],
    };
    const param = {
        method: "post",
        body: JSON.stringify(data),
    };
    fetch("/api/login", param)
        .then((res) => res.json())
        .then((data) => console.log(data));
};
