const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
app.use(express.urlencoded({
    extended: true
}));
app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "../static/samochody.html"))
})
app.post("/handleForm", function (req, res) {

})

app.use(express.static('static'))

app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
