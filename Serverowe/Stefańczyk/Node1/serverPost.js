const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
app.use(express.urlencoded({
    extended: true
}));

app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "./static/formularzInputs.html"))

})
app.post("/handleForm", function (req, res) {
    let wynik = {
        message: "",
        wynik: "",
    }
    // console.log(req.body.wybor == "różnica")
    if (req.body.wybor == "różnica") {
        wynik['message'] = "różnica elementów"
        wynik['wynik'] = (req.body.liczba1 - req.body.liczba2)
        // console.log(wynik)
        res.send(wynik)
    }
    else if (req.body.wybor == "suma") {
        wynik['message'] = "suma elementów"
        wynik['wynik'] = (req.body.liczba1 + req.body.liczba2)
        res.send(wynik)
    }
    else if (req.body.wybor == "iloraz") {
        wynik['message'] = "iloraz elementów"
        wynik['wynik'] = (req.body.liczba1 / req.body.liczba2)
        res.send(wynik)
    }
    else if (req.body.wybor == "iloczyn") {
        wynik['message'] = "iloczyn"
        wynik['wynik'] = (req.body.liczba1 * req.body.liczba2)
        res.send(wynik)
    }
    else if (req.body.wybor == "wszystkie") {

        // res.send(wynik)
    }



})
app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
