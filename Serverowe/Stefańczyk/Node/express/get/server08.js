const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")

app.get("/koty", function (req, res) {
    console.log("ścieżka do katalogu głównego aplikacji: " + __dirname)
    res.sendFile(path.join(__dirname, "/static/pages/koty.html"))

})

app.get("/auta", function (req, res) {
    res.sendFile(path.join(__dirname, "/static/pages/auta.html"))
    console.log(__dirname)
})
app.get("/drzewa", function (req, res) {
    res.sendFile(path.join(__dirname, "/static/pages/drzewa.html"))
    console.log(__dirname)
})



app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})