const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
const formidable = require('formidable');



app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "./static/upload02.html"))
})
app.post('/handleUpload', function (req, res) {
    let form = formidable({});
    form.keepExtensions = true
    form.multiples = true

    form.uploadDir = __dirname + '/static/upload/'
    form.parse(req, function (err, fields, files) {
        // console.log("----- przesłane pola z formularza ------");
        // console.log(fields.date);
        // console.log(fields);
        // console.log("----- przesłane formularzem pliki ------");
        // console.log(files.imagetoupload.size);
        // console.log(files.imagetoupload.path);
        // console.log(files.imagetoupload.path);
        console.log(files);

        const data = {
            date: fields.date
        }
        // musze forem i pushem
        const image = [
            // imageupload: {

            // },
            // path: files.imagetoupload.path,
        ]
        for (let i = 0; i < files.imagetoupload.length; i++) {
            image.push("a")

        }
        const wynik = [data, image]
        res.header("content-type", "application/json")
        res.send(JSON.stringify(wynik, null, 5))

    });
});

app.use(express.static('static'))
app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
