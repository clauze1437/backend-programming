// membuat callback
console.log("----- Membuat Callback Function -----");
const formatName = (nama) => nama.toUpperCase(); // bisa satu baris

/** const formatName = (nama) => {
    const result = nama.toUpperCase();
    return result;
}; */

const getName = (nama, callback) => console.log(callback(nama));

getName("Muhammad Azzam Nur Alwi Mansyur", formatName);

console.log(""); // spasi

// setTimeout | Asynchronous Programming Javascript
console.log("----- setTimeout | Asynchronous Programming -----");
const dua = () => console.log("Dua");

console.log("Satu");

setTimeout(dua, 3000); // function dua dijeda selama 3 detik

console.log("Tiga");
