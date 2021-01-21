const express = require("express");
const app = express();
const morgan = require("morgan");
const cookieParser = require("cookie-parser");

app.use(morgan("dev"));
app.use(express.json());
app.set("port", process.env.PORT || 3000);

app.use(cookieParser());
app.set("views", __dirname + "/templates");
app.set("view engine", "ejs");
app.engine("html", require("ejs").renderFile);

//routes
app.get("/", (req, res) => {
  res.sendFile(__dirname + "/templates/index.html");
});

//To use POST
app.use(
  express.urlencoded({
    extended: true,
  })
);

//GET login
app.get("/login", (req, res) => {
  res.render("login.html", { message: "" });
});

//POST logged
app.post("/logged", (req, res) => {
  if (req.body.username === "asteroide77" && req.body.password === "secret") {
    res.render("logged.html", { message: "Logged" });
  } else {
    res.render("login.html", {
      message: "You've tried to sign with an incorrect account or password",
    });
  }
});

app.use(express.static(__dirname + "/static"));

//Log output
app.listen(app.get("port"), () => {
  console.log(`Server port ${app.get("port")}`);
});
