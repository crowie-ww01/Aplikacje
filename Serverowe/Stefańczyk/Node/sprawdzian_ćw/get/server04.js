const express = require("express")
const app = express()
const PORT = 3000
const path = require("path")
app.use(express.static('static'))

app.get("/product/:id", function (req, res) {
    console.log(path.join(__dirname, "/static/index01.html"))

    if (req.params.id == 1) {
        res.sendFile(path.join(__dirname, "/static/index01.html"))
    }
    else if (req.params.id == 2) {
        res.sendFile(path.join(__dirname, "/static/index02.html"))

    }
    else if (req.params.id == 3) {
        res.sendFile(path.join(__dirname, "/static/index03.html"))

    }
    else {
        res.send("taki produkt nie istnieje")
    }
})


app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})