const express = require("express"); // import express
const router = express.Router(); // buat object routing

const StudentController = require("../controllers/StudentController"); // import student controller

// membuat routing home
router.get("/", (req, res) => {
  res.send("Hello Express");
});

// membuat routing student
router.get("/students", StudentController.index);
router.post("/students", StudentController.store);
router.put("/students/:id", StudentController.update);
router.delete("/students/:id", StudentController.destroy);

// export routing
module.exports = router;
