const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")

app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "../static/formularz.html"))

})
app.get("/handleForm", function (req, res) {
    res.send(req.query)
    console.log(req.query)

    // res.send(req.query.color)
})

app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
