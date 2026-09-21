const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
app.get("/", function (req, res) {
    // req.query.count
    // res.send(("<div style='background-color:" + req.query.bg + ";'>l</div>").repeat(req.query.count))
    res.send((`<div style='background-color: ${req.query.bg};'>l</div>`).repeat(req.query.count))
})

app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})