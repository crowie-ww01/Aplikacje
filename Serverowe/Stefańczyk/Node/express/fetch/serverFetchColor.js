const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
app.use(express.urlencoded({
    extended: true
}));
app.use(express.json());

app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "./static/fetchColors.html"))
})
app.post("/fetch", function (req, res) {
    console.log(req.body)
    // let RGB = `${req.body.red}, ${req.body.green}, ${req.body.blue}`
    // console.log(RGB)
    console.log(`rgba(${req.body.red}, ${req.body.green}, ${req.body.blue}, ${req.body.alfa})`)
    res.send(`rgba(${req.body.red}, ${req.body.green}, ${req.body.blue}, ${req.body.alfa / 100})`)
})
app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
