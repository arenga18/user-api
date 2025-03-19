# Laravel 12 API

## 📌 Deskripsi

Proyek ini adalah API sederhana menggunakan Laravel 12 dengan fitur CRUD untuk entitas **User**. API ini mendukung operasi **Create, Read, Update, dan Delete (CRUD)** dengan validasi input serta logging setiap request.

---

## ⚙️ Teknologi yang Digunakan

-   **Laravel 12**
-   **PHP 8.2+**
-   **MySQL / MariaDB**
-   **Composer**
-   **Postman / cURL (untuk pengujian API)**

---

## 🚀 Instalasi & Konfigurasi

### **1️⃣ Clone Repository**

```sh
git clone https://github.com/arenga18/user-api.git
```

### **2️⃣ Install Dependencies**

```sh
composer install
```

### **3️⃣ Konfigurasi `.env`**

Buat file `.env` dari contoh yang disediakan:

```sh
cp .env.example .env
```

Edit file `.env` untuk konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=user_api
DB_USERNAME=root
DB_PASSWORD=
```

### **4️⃣ Install Composer**

```sh
composer install
```

### **5️⃣ Generate App Key**

```sh
php artisan key:generate
```

### **6️⃣ Setup Database**

```sh
php artisan migrate
```

### **7️⃣ Jalankan Server**

```sh
php artisan serve
```

API dapat diakses di: **`http://127.0.0.1:8000/api/users`**

---

## 📖 Dokumentasi API

Untuk melihat dokumentasi API secara lokal, kunjungi **Swagger UI** di:

```
http://127.0.0.1:8000/api/documentation
```

---

## 🔥 Endpoint API

### **1️⃣ Get All Users**

```http
GET /api/users
```

**Response:**

```json
[
    {
        "id": "550e8400-e29b-41d4-a716-446655440000",
        "name": "John Doe",
        "email": "john@example.com",
        "age": 25
    }
]
```

### **2️⃣ Get User by ID**

```http
GET /api/users/{id}
```

### **3️⃣ Create User**

```http
POST /api/users
```

**Body:**

```json
{
    "name": "Jane Doe",
    "email": "jane@example.com",
    "age": 30
}
```

### **4️⃣ Update User**

```http
PUT /api/users/{id}
```

**Body:**

```json
{
    "name": "Jane Updated",
    "age": 31
}
```

### **5️⃣ Delete User**

```http
DELETE /api/users/{id}
```

---

## ✅ Pengujian API dengan Postman / cURL

**Contoh Menggunakan cURL:**

```sh
curl -X POST http://127.0.0.1:8000/api/users \
     -H "Content-Type: application/json" \
     -d '{"name": "John Doe", "email": "john@example.com", "age": 25}'
```

---

## 🧪 Pengujian dengan Jest

Untuk menguji API menggunakan **Jest**, jalankan perintah berikut:

```sh
npm install
npx jest tests/user.test.js
```
