const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
app.use(express.urlencoded({
    extended: true
}));
const samochody = [
    "audi",
    "opel",
    "fiat",
    "bmw",
    "maluch",

]


app.get("/", function (req, res) {
    let page = `
        <h1>zad 05:samochody</h1>
    <h2>Wybierz stan samochodów</h2>
    <form action="/handleForm" method="POST">
        <table>
            <tr>
                <td></td>
                <td></td>
                <td>nowych</td>
                <td>używanych</td>
                <td>powypadkowych</td>
            </tr>`

    for (let i = 0; i < samochody.length; i++) {
        page += `            <tr>
                <td>${i + 1}</td >
                <td>${samochody[i]}</td>
                <td><input type="radio" name="${samochody[i]}" value="nowe"></td>
                <td><input type="radio" name="${samochody[i]}" value="używane"></td>
                <td><input type="radio" name="${samochody[i]}" value="powypadkowe"></td>
            </tr > `
    }

    page +=
        `</table >
            <button type="submit">send</button>

    </form > `
    res.send(page)
})

app.post("/handleForm", function (req, res) {
    let stany = Object.values(req.body);
    let slownik = {};
    for (let stan of stany) {
        if (!(stan in slownik)) {
            slownik[stan] = 1;
        }
        else {
            slownik[stan] += 1;

        }
    }
    console.log(slownik)
    res.send(slownik)

})
// app.post("/handleForm", function (req, res) {
//     let stany = Object.values(req.body);
//     res.send({
//         "nowe": stany.filter(stan => stan == "nowe").length,
//         "używane": stany.filter(stan => stan == "używane").length,
//         "powypadkowe": stany.filter(stan => stan == "powypadkowe").length
//     })
// })

app.use(express.static('static'))

app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
