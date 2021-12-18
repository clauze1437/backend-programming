class StudentController {
  index(req, res) {
    const data = {
      message: "Menampilkan data students",
      data: [],
    };
    res.json(data);
  }

  store(req, res) {
    const { name } = req.body;

    const data = {
      message: `Menambahkan data students ${name}`,
      data: [],
    };
    res.json(data);
  }

  update(req, res) {
    const { id } = req.params;
    const { name } = req.body;

    const data = {
      message: `Mengedit data students id ${id}, nama ${name}`,
      data: [],
    };
    res.json(data);
  }

  destroy(req, res) {
    const { id } = req.params;

    const data = {
      message: `Menghapus data students id ${id}`,
      data: [],
    };
    res.json(data);
  }
}

// buat object StudentController
const object = new StudentController();

// export object
module.exports = object;
