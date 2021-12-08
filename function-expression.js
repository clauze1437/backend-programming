// function expression
/**
 * Fungsi untuk menghitung luas
 *
 * @param {number} jari - jari jari lingkaran
 * @returns {number} - hasil luas lingkaran
 */
console.log("------- Membuat Function Expression -------");
const hitungLuas = function (jari) {
  const hasil = 3.14 * jari * jari;

  return hasil;
};

console.log(hitungLuas(5));
console.log(hitungLuas(7));
