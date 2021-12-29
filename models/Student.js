// import database
const db = require("../config/database");

// class model student
class Student {
  // method untuk query semua data
  static all() {
    return new Promise((resolve, reject) => {
      // membuat query di dalam variabel sql
      const sql = "SELECT * FROM students";

      // query ke database
      db.query(sql, (err, results) => {
        resolve(results);
      });
    });
  }
}

// exports class student
module.exports = Student;
