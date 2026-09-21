const express = require("express")
const app = express()
const PORT = 3000

app.get("/", function (req, res) {
    res.send("dane html odeslane z serwera do przegladarki")
})
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})