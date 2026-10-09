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
    res.header("content-type", "application/json")
    let wynik = {
        message: "",
        wynik: "",
    }
    // console.log(req.body.wybor == "różnica")
    if (req.body.wybor == "różnica") {
        wynik['message'] = "różnica elementów"
        wynik['wynik'] = (req.body.liczba1 - req.body.liczba2)
        // console.log(wynik)
        res.send(JSON.stringify(wynik, null, 5))
    }
    else if (req.body.wybor == "suma") {
        wynik['message'] = "suma elementów"
        wynik['wynik'] = (parseInt(req.body.liczba1) + parseInt(req.body.liczba2))
        res.send(JSON.stringify(wynik, null, 5))
    }
    else if (req.body.wybor == "iloraz") {
        wynik['message'] = "iloraz elementów"
        wynik['wynik'] = (req.body.liczba1 / req.body.liczba2)
        res.send(JSON.stringify(wynik, null, 5))
    }
    else if (req.body.wybor == "iloczyn") {
        wynik['message'] = "iloczyn"
        wynik['wynik'] = (req.body.liczba1 * req.body.liczba2)
        res.send(JSON.stringify(wynik, null, 5))
    }
    else if (req.body.wybor == "wszystkie") {
        let wszystkie = []
        wynik['message'] = "różnica elementów"
        wynik['wynik'] = (req.body.liczba1 - req.body.liczba2)
        wszystkie.push(wynik)
        wynik = {}
        wynik['message'] = "suma elementów"
        wynik['wynik'] = (parseInt(req.body.liczba1) + parseInt(req.body.liczba2))
        wszystkie.push(wynik)
        wynik = {}
        wynik['message'] = "iloraz elementów"
        wynik['wynik'] = (req.body.liczba1 / req.body.liczba2)
        wszystkie.push(wynik)
        wynik = {}
        wynik['message'] = "iloczyn"
        wynik['wynik'] = (req.body.liczba1 * req.body.liczba2)
        wszystkie.push(wynik)
        res.send(JSON.stringify(wszystkie, null, 5))
    }



})
app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
