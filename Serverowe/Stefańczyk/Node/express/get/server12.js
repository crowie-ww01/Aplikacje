const express = require("express")
const app = express()
const PORT = 3000



app.get('/', function (req, res) {
    let text = ""

    for (let i = 0; i < 50; i++) {
        let random = Math.round(Math.random() * 100)
        text += `<a href='/product/${random}'>${random}</a><br>`

    }
    res.send(text)
})
app.get('/product/:id', function (req, res) {
    let id = req.params.id
    res.send(`podstrona z danymi roduktu o id = ${id}`)
})
app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})