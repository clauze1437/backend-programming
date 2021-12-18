const express = require("express"); // import express

const app = express(); // buat object express

// menggunakan middleware
app.use(express.json());

// mendefinisikan route
const router = require("./routes/api");
app.use(router);

// mendefinisikan port
app.listen(3000, () => {
  console.log("Server running at http://localhost/3000");
});
