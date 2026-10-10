const express = require("express")
const app = express()
const PORT = 3000
const path = require("path")
app.use(express.static('static'))

app.get("/", function (req, res) {
    console.log(req.query.value, req.query.degToRad)
    let wynik = ""
    if (req.query.degToRad == "false") {
        console.log(req.query.degToRad, req.query.degToRad * 180, req.query.degToRad * 180 / Math.PI)
        wynik = `${req.query.value} radianów = ${(req.query.value * 180 / Math.PI).toFixed(2)} stopni`
    } else {
        wynik = `${req.query.value} stopni = ${(req.query.value * Math.PI / 180).toFixed(2)} radianów`
    }
    res.send(wynik)
})


app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})