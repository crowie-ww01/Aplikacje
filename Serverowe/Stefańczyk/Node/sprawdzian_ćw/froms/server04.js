const express = require("express")
const app = express()
const PORT = 3000
const path = require("path")

app.use(express.static('static'))
app.use(express.urlencoded({
    extended: true
}));

app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "/static/form02Post.html"))
})
app.post("/HandleForm", function (req, res) {
    if (req.body.ilosc && req.body.fontSize && req.body.kolor && req.body.rozmiar) {
        let wynik = "<div style='display:flex; gap:15px; flex-wrap:wrap;'>"
        for (let i = 0; i < req.body.ilosc; i++) {
            console.log(req.body.fontSize)

            wynik += `<div style="background-color:${req.body.kolor}; width:${req.body.rozmiar}px; height:${req.body.rozmiar}px; text-align:center; color:white; border-radius:50%; font-size:${req.body.fontSize};">${i}</div>`
        }
        wynik += "</div>"
        res.send(wynik)
    }
    else {
        res.send("podaj wszystkie dane")
    }
})
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})