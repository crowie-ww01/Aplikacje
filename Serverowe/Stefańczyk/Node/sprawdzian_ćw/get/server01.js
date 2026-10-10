const express = require("express")
const app = express()
const PORT = 3000
const path = require("path")
app.use(express.static('static'))

app.get("/index01", function (req, res) {
    res.sendFile(path.join(__dirname, "/static/index01.html"))
})
app.get("/index02", function (req, res) {
    res.sendFile(path.join(__dirname, "/static/index02.html"))
})
app.get("/index03", function (req, res) {
    res.sendFile(path.join(__dirname, "/static/index03.html"))
})


app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})