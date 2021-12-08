// membuat callback
console.log("----- Membuat Callback Function -----");
function formatName(nama) {
  const result = nama.toUpperCase();
  return result;
}

function getName(nama, callback) {
  const result = callback(nama);
  console.log(result);
}

getName("Muhammad Azzam Nur Alwi Mansyur", formatName);
