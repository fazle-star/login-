
# Form Izin Santri Qodr

# Cara Mengerjakan Project
- Semua Team membuat `<Branch-Team>` baru, lalu masing" santri di dalam team mengerjakan task di branch team sendiri.
- Lalu apabila sudah selesai bisa mengikuti intruksi di bawah ini.

> ## setting up project


## clone repository

pindah ke folder kosong dimana project ini akan di simpan di local

`git clone git@github.com:arydiaihdahusnayainfe/form-izin-santri-qodr.git`

- jika ada permintaan login. maka ikuti petunjuknya.

- jika tetap gagal maka ada kemungkinan memerlukan ssh yang terdaftar

- lihat halaman ini [github ssh](https://docs.github.com/en/authentication/connecting-to-github-with-ssh)

### men install Package Project
Setelah Men Clone di lokal, lalu Install Package Project dengan `npm i` lalu enter

### buat branch baru

`git branch <nama-branch-team-mu>`

example `git branch navigation`

### pindah ke branch tersebut

`git switch <nama-branch-masing-masing>`

example `git switch navigation`

### koding sesuai dengan bagiannya

> untuk menghindari konflik html maka di sepakati siapa mengerjakan apa yang di kerjakan

### menambahkan progress ke daftar commit git

`git add <hal-yang-mau-di-tambahkan>` example `git add index.html` atau untuk semua perubahan `git add .`

### commit perubahan agar tercatat di git

`git commit -m <message>` example `git commit -m 'ini adalah deskripsi apa yang sudah di kerjakan'`

### push ke github

`git push origin <nama-branch-yang-barusan-di-commit>`

example `git push origin navigation`

> # mengerjakan project setelah <branch-team-mu> branch di update

lihat status di github atau berpindah ke Team branch di local dan `git pull origin <nama-breach-team>`

apabila ada progress yang di kerjakan di branch lain dan belum di commit tapi kita pindah branch, maka perubahan tersebut ikut bersama dengan pertukaran branch.

untuk menghindari hal itu, ketika sedang berada di branch lain e.g. `navigation`, maka commit terlebih dahulu sebelum berpindah ke main branch.

### pindah ke <team> branch

`git switch <team-branch>`

### update <team> branch

`git pull origin <team-branch>`

### pindah ke branch masing-masing

`git switch <nama-branch-masing-masing>`

example `git switch kelompok elang`

### merge main branch ke branch masing-masing

`git merge <team-branch>`

### menyelesaikan konflik (jika ada)

konflik akan memicu IDE / text editor untuk menyelesaikan konflik yang bisa di pilih salah satu atau menggabungkan keduanya

### menambahkan progress merge ke daftar commit git

`git add <hal-yang-mau-di-tambahkan>` example `git add index.html` atau untuk semua perubahan `git add .`

### commit perubahan agar tercatat di git

`git commit -m <message>` example `git commit -m 'ini adalah deskripsi apa yang sudah di kerjakan'`

### push ke github

`git push origin <nama-branch-yang-barusan-di-commit>`

example `git push origin navigation`


> ## Cara ilangin UnknownAtRules tailwind di CSS

```css
@tailwind base; unknown at rule @tailwind
@tailwind components; unknown at rule @tailwind
@tailwind utilities; unknown at rule @tailwind
```

buka link ini [Linknya](https://www.codeconcisely.com/posts/tailwind-css-unknown-at-rules/)

> # Informasi

cara pake font di tailwind

- `font-outfit` : font-family : [Outfit, serif]  