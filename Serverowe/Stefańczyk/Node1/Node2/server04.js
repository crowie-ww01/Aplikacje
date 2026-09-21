const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
app.use(express.urlencoded({
    extended: true
}));
app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "../static/formularzRadio.html"))
})
app.post("/handleForm", function (req, res) {
    if (req.body.kolor && req.body.wielkosc && req.body.rozmiar && req.body.ile) {
        let html = ""
        for (let i = 0; i < req.body.ile; i++) {
            html += (`<div style="background-color:${req.body.kolor};width: ${req.body.rozmiar};height: ${req.body.rozmiar}; color:white;font-size:${req.body.wielkosc} ;text-align:center;"> ${i}</div>`)
        }
        res.send(html)
    }
    else {
        res.send("Podaj wszystkie dane")

    }
    console.log(req.body)

})

app.use(express.static('static'))

app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
