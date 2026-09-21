const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
app.use(express.urlencoded({
    extended: true
}));
app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "../static/formularzPOST.html"))
})
app.post("/handleForm", function (req, res) {
    console.log(req.body)
    res.send(`<body style="background-color:${req.body.color}; color:white ;text-align:center;"> ${req.body.color}</body>`)

})

app.use(express.static('static'))

app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
