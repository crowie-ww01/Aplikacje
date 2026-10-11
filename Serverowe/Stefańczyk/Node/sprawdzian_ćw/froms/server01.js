const express = require("express")
const app = express()
const PORT = 3000
const path = require("path")

app.use(express.static('static'))
app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "/static/form01.html"))
})
app.get("/HandleForm", function (req, res) {
    console.log(req.query)

    res.header("content-type", "application/json")
    res.send(JSON.stringify(req.query, null, 5))
})

app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})