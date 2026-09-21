const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
app.get("/", function (req, res) {
    // console.log(req.query.toRad)
    // console.log(req.query.toRad == "true")
    if (req.query.toRad == "true") {
        let rad = (req.query.value * Math.PI / 180).toFixed(2)
        res.send((`<p>${req.query.value} stopni to ${rad} radianów </p>`))
    }
    else {
        let deg = (req.query.value * 180 / Math.PI).toFixed(2)
        res.send((`<p>${req.query.value} radianów to ${deg} stopni </p>`))
    }

})

app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})