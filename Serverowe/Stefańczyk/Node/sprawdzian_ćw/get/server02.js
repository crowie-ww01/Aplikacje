const express = require("express")
const app = express()
const PORT = 3000
const path = require("path")
app.use(express.static('static'))

app.get("/", function (req, res) {
    let wynik = "<div style='display:flex; gap:15px; flex-wrap:wrap;' >"
    for (let i = 1; i <= req.query.count; i++) {
        const square = `<div style='background-color:${req.query.bg}; text-align:center;color:white; height:100px; width:100px'>${i}</div>`
        wynik += square

    }
    wynik += "</div>"
    res.send(wynik)
})


app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})