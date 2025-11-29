# 🌟 PokéCare — Aplikasi Latihan Pokémon (Responsi PBO)

##  Data Diri
- **Nama Lengkap:** Aurellia Nabila Rahma Putri  
- **NIM:** H1H024066  
- **Shift Awal:** C  
- **Shift Akhir:** C  

---

**##Deskripsi Aplikasi**
PokéCare adalah aplikasi berbasis PHP yang dibuat untuk memenuhi tugas Responsi PBO.  
Aplikasi ini mensimulasikan sistem latihan Pokémon menggunakan konsep **Object-Oriented Programming (OOP)**.

Pokémon yang digunakan: **Ekans**
Tipe: Poison
Level: 5
HP: 30


Fitur utama:
- Menampilkan informasi Pokémon (Nama, Tipe, Level, HP, EXP, Jurus Spesial)
- Form latihan Pokémon
- Efek latihan terhadap Level, HP, dan EXP
- Riwayat latihan tersimpan dalam file `history.json`
- Tampilan UI pastel cute + animasi + responsive mobile

---

## Konsep OOP yang Digunakan
### 1. Encapsulation
- Property Pokémon dibuat **protected**  
- Akses menggunakan getter method (`getName()`, `getLevel()`, dll)

### 2. Inheritance
- Kelas `Ekans` **extends** kelas abstrak `Pokemon`
- Me-reuse atribut dan method dasar Pokémon

### 3. Polymorphism
- Method `train()` menyesuaikan efek Level/HP tergantung jenis latihan
- Method `specialMove()` di-override sesuai Pokémon Ekans

### 4. Abstraction
- Kelas `Pokemon` bersifat **abstract**
- Memaksa semua Pokémon memiliki method `specialMove()`

---

## Struktur File
| File | Fungsi |
|------|--------|
| `classes/Pokemon.php` | Kelas induk abstrak Pokémon |
| `classes/Ekans.php` | Subclass Ekans dengan jurus spesial |
| `trainer.php` | Kelas Trainer untuk riwayat latihan |
| `index.php` | Halaman beranda Pokémon |
| `train.php` | Form latihan & efek latihan |
| `history.php` | Tabel riwayat latihan (`history.json`) |
| `history.json` | Data hasil latihan |
| `style.css` | Tampilan UI pastel & animasi |

---

##  Cara Menjalankan Aplikasi di Laragon
1. Pastikan **Laragon** sudah terinstall dan berjalan.
2. Letakkan folder project `ResponsiPBO` di `C:\laragon\www\` (atau folder web root Laragon Anda).  
   Contoh: `C:\laragon\www\ResponsiPBO`
3. Jalankan **Laragon**, lalu klik **Start All**.
4. Buka browser dan akses:
