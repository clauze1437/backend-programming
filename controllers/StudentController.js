// Import data students dari folder models/Student.js
const Student = require("../models/Student.js");

// Membuat Class StudentController
class StudentController {
  async index(req, res) {
    // Tampilkan data students
    const students = await Student.all();
    const data = {
      message: "Menampilkan semua students",
      data: students,
    };

    res.json(data);
  }

  store(req, res) {
    const { nama } = req.body;
    // Tambahkan data students
    dataStudents.push(nama);

    const data = {
      message: `Menambahkan data student: ${nama}`,
      data: dataStudents,
    };

    res.json(data);
  }

  update(req, res) {
    const { id } = req.params;
    const { nama } = req.body;

    // Update data students
    dataStudents[id] = nama;

    const data = {
      message: `Mengedit student id ${id}, nama ${nama}`,
      data: dataStudents,
    };

    res.json(data);
  }

  destroy(req, res) {
    const { id } = req.params;

    // Hapus data students
    dataStudents.splice(1, id);

    const data = {
      message: `Menghapus student id ${id}`,
      data: dataStudents,
    };

    res.json(data);
  }
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;
