const express = require("express")
const app = express()
const PORT = 3000

const path = require("path")
app.use(express.urlencoded({
    extended: true
}));
app.get("/", function (req, res) {
    res.sendFile(path.join(__dirname, "../static/newsletter.html"))
})
app.get("/removeUserBySelect", function (req, res) {
    let select = `<form action="/removeUser" method="post">
        <h1>Usuń email (select)</h1>
        <h2>Usuń email z użyciem select</h2>
        <select name="email" id="">`

    for (let i = 0; i < users.length; i++) {
        select +=
            `<option value="${users[i].email}"}>${users[i].email}</option>`
    }
    select += `</select>
        <input type="submit" name="" id="" value="submit">
        </form>`
    res.send(select)

})
app.get("/removeUserByRadio", function (req, res) {
    let radio = `<form action="/removeUser" method="post">
        <h1>Usuń email (radio)</h1>
        <h2>Usuń email z radio</h2>`

    for (let i = 0; i < users.length; i++) {
        radio +=
            `<input type="radio" name="email" value="${users[i].email}"}>${users[i].email}`
    }
    radio +=
        `<input type="submit" value="submit">
        </form>`
    res.send(radio)

})
app.get("/removeUserByCheckboxes", function (req, res) {
    let check = `<form action="/removeUser" method="post">
        <h1>Usuń email (checkbox)</h1>
        <h2>Usuń email z użyciem checkbox</h2>`
    for (let i = 0; i < users.length; i++) {
        check +=
            `<input type="checkbox" name="email" value="${users[i].email}"}>${users[i].email}`
    }
    check +=
        `<input type="submit" name="" id="" value="submit">
        </form>`
    res.send(check)

})
let users = [
    { nick: "111", email: "111@w.pl" },
    { nick: "222", email: "222@w.pl" },
    { nick: "333", email: "333@w.pl" },
]

app.post("/handleForm", function (req, res) {
    let unique = true
    // users.push({ nick: "134", email: "ameil@email.com" })
    for (let i = 0; i < users.length; i++) {
        if (users[i].email == req.body.email) {
            unique = false
        }
    }
    if (unique) {
        users.push({ nick: req.body.nick, email: req.body.email })
        res.send("dodano")
    }
    else {
        res.send("istnieje")
    }
    console.log(users)
})
app.post("/removeUser", function (req, res) {
    let doUsuniecia = 0
    console.log(req.body)
    if (typeof req.body.email == 'string') {
        // users.push({ nick: "134", email: "ameil@email.com" })
        for (let i = 0; i < users.length; i++) {
            if (users[i].email == req.body.email) {
                doUsuniecia += 1
            }
        }
        if (doUsuniecia > 0) {
            users = users.filter(function (user) {
                return user.email != req.body.email
            })
            res.send("usunięto")
        }
        else {
            res.send("nie istnieje")
        }
    }
    else {
        for (let j = 0; j < req.body.email.length; j++) {
            for (let i = 0; i < users.length; i++) {
                if (users[i].email == req.body.email[j]) {
                    doUsuniecia += 1
                }
            }
            if (doUsuniecia > 0) {
                users = users.filter(function (user) {
                    return user.email != req.body.email[j]
                })
            }
        }
        res.send("usunieto: " + doUsuniecia)
    }
})

app.use(express.static('static'))

app.listen(PORT, function () {
    console.log("start serwera na porcie " + PORT)
})
