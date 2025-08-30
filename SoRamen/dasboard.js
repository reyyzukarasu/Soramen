//toggle class active untuk hamberger
const navbarNav = document.querySelector(".navbar-nav");

//ketika hamberger menu di klik
document.querySelector("#hamberger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

//klik diluar area elemen
const hb = document.querySelector("#hamberger-menu");

document.addEventListener("click", function (e) {
  if (!hb.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// const allStar = document.querySelectorAll(".rating .star");
// const ratingValue = document.querySelector(".rating input");

// allStar.forEach((item, idx) => {
//   item.addEventListener("click", function () {
//     let click = 0;
//     ratingValue.value = idx + 1;
//     console.log(ratingValue.value);

//     allStar.forEach((i) => {
//       i.classList.replace("bxs-star", "bx-star");
//       i.classList.remove("active");
//     });
//     for (let i = 0; i < allStar.length; i++) {
//       if (i <= idx) {
//         allStar[i].classList.replace("bx-star", "bxs-star");
//         allStar[i].classList.add("active");
//       } else {
//         allStar[i].style.setProperty("--i", click);
//         click++;
//       }
//     }
//   });
// });

// Mendapatkan semua tautan di dalam navigasi
const navLinks = document.querySelectorAll(".navbar-nav a");

// Function untuk menandai tautan yang aktif
function highlightActiveLink() {
  // Mendapatkan bagian yang sedang ditampilkan pada URL (contoh: #contact)
  const currentSection = window.location.hash;

  // Menghapus kelas 'active' dari semua tautan
  navLinks.forEach((link) => {
    link.classList.remove("active");
  });

  // Menandai tautan yang sesuai dengan bagian yang sedang ditampilkan
  navLinks.forEach((link) => {
    if (link.getAttribute("href") === currentSection) {
      link.classList.add("active");
    }
  });
}

// Memanggil function untuk menandai tautan yang aktif pada saat halaman dimuat
highlightActiveLink();

// Event listener saat bagian pada URL berubah (misalnya, saat pengguna menggulir halaman)
window.addEventListener("hashchange", highlightActiveLink);


var sensor = [
  "ancuk",
  "ancok",
  "ajig",
  "ajg",
  "anjay",
  "anjg",
  "anjing",
  "anying",
  "anjir",
  "asu",
  "asyu",
  "babangus",
  "babi",
  "bacol",
  "bacot",
  "bagong",
  "bajingan",
  "balegug",
  "banci",
  "bangke",
  "bangsat",
  "bedebah",
  "bedegong",
  "bego",
  "belegug",
  "beloon",
  "bencong",
  "bloon",
  "blo'on",
  "bodoh",
  "boloho",
  "buduk",
  "budug",
  "celeng",
  "cibai",
  "cibay",
  "cocot",
  "cocote",
  "cok",
  "cokil",
  "colai",
  "colay",
  "coli",
  "colmek",
  "conge",
  "congean",
  "congek",
  "congor",
  "cuk",
  "cukima",
  "cukimai",
  "cukimay",
  "dancok",
  "entot",
  "entotan",
  "ewe",
  "ewean",
  "gelo",
  "genjik",
  "germo",
  "gigolo",
  "goblo",
  "goblog",
  "goblok",
  "hencet",
  "henceut",
  "heunceut",
  "homo",
  "idiot",
  "itil",
  "jancuk",
  "jancok",
  "jablay",
  "jalang",
  "jembut",
  "jiancok",
  "jilmek",
  "jurig",
  "kacung",
  "kampang",
  "kampret",
  "kampungan",
  "kehed",
  "kenthu",
  "kentot",
  "kentu",
  "keparat",
  "kimak",
  "kintil",
  "kirik",
  "kunyuk",
  "kurap",
  "konti",
  "kontol",
  "kopet",
  "koplok",
  "lacur",
  "lebok",
  "lonte",
  "maho",
  "meki",
  "memek",
  "monyet",
  "ndas",
  "ndasmu",
  "ngehe",
  "ngentot",
  "nggateli",
  "nyepong",
  "ngewe",
  "ngocok",
  "pante",
  "pantek",
  "patek",
  "pathek",
  "peju",
  "pejuh",
  "pecun",
  "pecundang",
  "pelacur",
  "pelakor",
  "peler",
  "pepek",
  "puki",
  "pukima",
  "pukimae",
  "pukimak",
  "pukimay",
  "sampah",
  "sepong",
  "sial",
  "sialan",
  "silit",
  "sinting",
  "sontoloyo",
  "tai",
  "taik",
  "tempek",
  "tempik",
  "tete",
  "tetek",
  "tiembokne",
  "titit",
  "toket",
  "tolol",
  "ublag",
  "udik",
  "wingkeng",
];

// Fungsi untuk mengganti kata-kata dalam elemen HTML
function replaceTextInElements(elements) {
  elements.forEach(function (element) {
    // Mengambil teks dari elemen
    var originalText = element.textContent;

    // Mengganti kata-kata menggunakan ekspresi reguler dan fungsi penggantian kustom
    var newText = originalText.replace(
      new RegExp(sensor.join("|"), "gi"),
      function (match) {
        // Menghasilkan jumlah asterisk yang sesuai dengan panjang kata yang disensor
        return "*".repeat(match.length);
      }
    );

    // Menetapkan teks yang telah diganti kembali ke elemen
    element.textContent = newText;
  });
}

// Mengambil semua elemen <p> dengan id="message"
var messageElements = document.querySelectorAll("p#message");

// Mengganti kata-kata dalam elemen-elemen yang dipilih
replaceTextInElements(messageElements);
