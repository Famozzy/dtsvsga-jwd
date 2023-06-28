var listNama = ["Faidil", "Daniel", "Rizky", "Rizal"];

document.write("<h1>List nama yang selamat duniaakhirat</h1>");
document.write("<ul>");

for(var nama of listNama){
  document.write("<li>" + nama + "</li>")
}

document.write("<li>dan masih banyak lagi...</li>")
document.write("</ul>");