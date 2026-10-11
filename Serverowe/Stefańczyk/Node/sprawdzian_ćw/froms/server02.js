const express = require("express")
const app = express()
const PORT = 3000
const path = require("path")

app.use(express.static('static'))
app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "/static/form02.html"))
})
app.get("/HandleForm", function (req, res) {
    res.send(`<body style="background-color:${req.query.color}; text-align:center;"><h1 style="color:white;">${req.query.color}</h1></body>`)
})
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})