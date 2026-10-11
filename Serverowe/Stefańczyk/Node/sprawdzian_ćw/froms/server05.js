const express = require("express")
const app = express()
const PORT = 3000
const path = require("path")

app.use(express.static('static'))
app.use(express.urlencoded({
    extended: true
}));

app.get("/", function (req, res) {
    const samochody = ['audi', 'opel', 'francuz', 'duży fiat', 'mercedes', 'małe fajne autko']
    let html = `<form action="/" method="POST"><table border=1>
    <tr>
    <td></td>
    <td></td>
    <td>nowych</td>
    <td>używanych</td>
    <td>powypadkowych</td>
    </tr>`
    for (let i = 0; i < samochody.length; i++) {
        html += `<tr>
        <td>${i + 1}</td>
        <td>${samochody[i]}</td>
        <td><input type="radio" name="${samochody[i]}" value="nowych"></td>
        <td><input type="radio" name="${samochody[i]}" value="używanych"></td>
        <td><input type="radio" name="${samochody[i]}" value="powypadkowych"></td>
    </tr> `
    }


    html += `</table ><input type="submit" value="send"></form > `
    res.send(html)
})
app.post("/", function (req, res) {
    let status = Object.values(req.body)
    let lista = {}
    for (let each of status) {
        if (each in lista) {
            lista[each] += 1

        }
        else {
            lista[each] = 1

        }

    }
    console.log(lista)
    res.send()

})
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})