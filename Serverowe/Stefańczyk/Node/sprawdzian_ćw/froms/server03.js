const express = require("express")
const app = express()
const PORT = 3000
const path = require("path")

app.use(express.static('static'))
app.use(express.urlencoded({
    extended: true
}));

app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "/static/form01Post.html"))
})
app.post("/HandleForm", function (req, res) {
    res.send(`<body style="background-color:${req.body.color}; text-align:center;"><h1 style="color:white;">${req.body.color}</h1></body>`)
})
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})