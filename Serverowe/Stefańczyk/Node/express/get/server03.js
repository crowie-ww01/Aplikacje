const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")

app.get("/", function (req, res) {
    console.log("ścieżka do katalogu głównego aplikacji: " + __dirname)
    res.sendFile(path.join(__dirname, "/static/index.html"))

})

app.get("/index", function (req, res) {
    res.sendFile(path.join(__dirname, "/static/index.html"))
    console.log(__dirname)
})

app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})