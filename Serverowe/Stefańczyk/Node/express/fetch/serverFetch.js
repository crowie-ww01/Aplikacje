const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
app.use(express.urlencoded({
    extended: true
}));
app.use(express.json());

app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "./static/fetch.html"))

})
app.post("/fetch", function (req, res) {
    console.log(req.body)

    console.log(req.body.c)
    // res.send(JSON.stringify(req.body));

    let wynik = {
        message: "",
        wynik: "",
    }
    // console.log(req.body.wybor == "różnica")
    if (req.body.c == "różnica") {
        wynik['message'] = "różnica elementów"
        wynik['wynik'] = (req.body.a - req.body.b)
        // console.log(wynik)
        res.send(JSON.stringify(wynik))
    }
    else if (req.body.c == "suma") {
        console.log("ok")
        wynik['message'] = "suma elementów"
        wynik['wynik'] = (parseInt(req.body.a) + parseInt(req.body.b))
        console.log(wynik)
        res.send(JSON.stringify(wynik))
    }
    else if (req.body.c == "iloraz") {
        wynik['message'] = "iloraz elementów"
        wynik['wynik'] = (req.body.a / req.body.b)
        res.send(JSON.stringify(wynik))
    }
    else if (req.body.c == "iloczyn") {
        wynik['message'] = "iloczyn"
        wynik['wynik'] = (req.body.a * req.body.b)
        res.send(JSON.stringify(wynik))
    }
    else if (req.body.c == "wszystkie") {
        let wszystkie = []
        wynik['message'] = "różnica elementów"
        wynik['wynik'] = (req.body.a - req.body.b)
        wszystkie.push(wynik)
        wynik = {}
        wynik['message'] = "suma elementów"
        wynik['wynik'] = (parseInt(req.body.a) + parseInt(req.body.b))
        wszystkie.push(wynik)
        wynik = {}
        wynik['message'] = "iloraz elementów"
        wynik['wynik'] = (req.body.a / req.body.b)
        wszystkie.push(wynik)
        wynik = {}
        wynik['message'] = "iloczyn"
        wynik['wynik'] = (req.body.a * req.body.b)
        wszystkie.push(wynik)
        res.send(JSON.stringify(wszystkie))
    }



})
app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
