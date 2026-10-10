const express = require("express")
const app = express()
const PORT = 3000
const path = require("path")
app.use(express.static('static'))

app.get("/", function (req, res) {
    let linki = ""
    for (let i = 0; i < 50; i++) {
        let number = Math.round(Math.random() * 100)
        linki += `<a href='/product/${i}'>product_id = ${i} </a>`
    }

    res.send(linki)
})
app.get("/product/:id", function (req, res) {
    res.send(`podstrona o id ${req.params.id}`)
})

app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})