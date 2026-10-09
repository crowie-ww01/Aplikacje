const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
app.use(express.urlencoded({
    extended: true
}));
app.use(express.json());

app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "./static/fetchAdding.html"))

})
let allLogs = []

app.post("/logs", function (req, res) {
    console.log(req.body)

    // res.send(JSON.stringify(req.body));
    let logs = {
        message: "",
        name: "",
        lastname: "",
    }
    logs['message'] = "logowanie klienta"
    logs['name'] = req.body.a
    logs['lastname'] = req.body.b
    console.log(logs)


    allLogs.push(logs)
    res.send(JSON.stringify(allLogs))




})
app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
