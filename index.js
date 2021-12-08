// membuat variable
console.log("------- Membuat Variable -------");
const nama = "Muhammad Azzam Nur Alwi Mansyur"; // string
console.log(nama);

/**
 * menggunakan template es6 literals
 * kelebihannya bisa multiline
 */
console.log(`nama saya: ${nama}`);

console.log("");

// tipe data
console.log("------- Membuat Data Types -------");
const age = 20; // number
console.log(`${age} tahun`);

console.log("");

// conditional - ternary operator
console.log("------- Membuat Conditional Ternary Operator -------");
const umur = 25; // number
umur > 21 ? console.log("Dewasa") : console.log("Belum");

console.log("");

// function declaration
/**
 * Fungsi untuk menghitung luas
 *
 * @param {number} jari - jari jari lingkaran
 * @returns {number} - hasil luas lingkaran
 */
console.log("------- Membuat Function Declaration -------");
function hitungLuasLingkaran(jari = 1) {
  const hasil = 3.14 * jari * jari;

  return hasil;
}

console.log(hitungLuasLingkaran());
console.log(hitungLuasLingkaran(5));
console.log(hitungLuasLingkaran(7));

// function expression
console.log("------- Membuat Function Expression -------");
const hitungLuas = function (jari = 1) {
  const hasil = 3.14 * jari * jari;

  return hasil;
};

console.log(hitungLuas());
console.log(hitungLuas(5));
console.log(hitungLuas(7));

// arrow function - javascript modern
console.log("------- Membuat Arrow Function 'Javascript Modern' -------");
const luasLingkaran = (jari) => 3.14 * jari * jari; // hanya 1 statement saja
const lingkaran = (jari) => {
  return 3.14 * jari * jari; // bisa lebih dari 1 statement
};

console.log(luasLingkaran(5));
console.log(lingkaran(5));
console.log(luasLingkaran(7));
console.log(lingkaran(7));

console.log("");

// object
console.log("------- Membuat Object -------");
const user = {
  name: "Muhammad Azzam Nur Alwi Mansyur",
  age: 20,
  address: "Jakarta Selatan",
};

console.log(user.name);
console.log(user.address);
console.log(user.age);

console.log("");

// object destructing
console.log("------- Membuat Object Destructing -------");
const person = {
  name: "Muhammad Azzam Nur Alwi Mansyur",
  umurku: 20,
  address: "Jakarta Selatan",
};

const { name, umurku, address } = person; // object tidak wajib berurutan
console.log(name, umurku, address);

console.log("");

// array destructing
console.log("------- Membuat Array Destructing -------");
const family = ["Mikel", "Hannah", "Jonas", "Martha"];

const [suami, istri, anakPertama, anakKedua] = family; // array wajib berurutan sesuai index ke berapa

console.log(suami, istri, anakPertama, anakKedua);
