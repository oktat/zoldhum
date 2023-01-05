# Felhasználói dokumentáció

## Követelmények

* Telepítve:
  * NodeJS
  * PHP
* Parancsok:
  * php parancs
  * npm parancs

## Használatbavétel

```bash
git clone https://github.com/andteki/zoldhum.git
cd zoldhum
composer install
npm install
```

Lépések:

* Be kell állítani az adatbázist (itt most SQLite példa van).
* Kulcsot kell generálni.

### Az adatbázis beállítása

Az SQLite adatbázishoz hozzunk létre egy üres database.sqlite fájlt a database könyvtárban:

```bash
touch database/database.sqlite
```

A touch parancs helyett, használjuk, az adott operációs rendszer lehetőségeit.

Készítsünk másolatot a .env.example állományról .env néven:

```bash
cp .env.example .env
```

Állítsuk be az SQLite lehetőséget a .env fájlban.

Tegyük megjegyzésbe a következőt:

```txt
#DB_CONNECTION=mysql
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=laravel
#DB_USERNAME=root
#DB_PASSWORD=
```

Hozzunk létre egy ilyen sort (célszerűen a #DB_CONNECTION=mysql sor felett)

```ini
DB_CONNECTION=sqlite
```

Generáljuk le az adatábzistáblákat:

```cmd
php artisan migrate
```

### Kulcs generálása

Kulcs generálása:

```cmd
php artisan key:generate
```

## Szerver indítása

```cmd
php artisan serve
```

## Végpontok

|  végpont       | metódus | azonosítás | siker       | kudarc |
|----------------|---------|------------|-------------|--------|
| /api/register      | post    | nem        |             |        |
| /api/login         | post    | nem        |             | 401    |
| /api/employees | get     | nem        | 200 OK      | 400 Bad Request, 404 Not Found |
| /api/employees | post    | igen       | 200 OK      |
| /api/employees/{id} | put     | igen       | 201 Created |
| /api/employees/{id} | delete  | igen       |             |        |
| /api/positions | get     | nem        |             |        |
| /api/positions | post    | nem        |             |        |
| /api/positions/{id} | put     | nem        |             |        |
| /api/positions/{id} | delete  | nem        |             |        |

## Felhasználó regisztrálása

A következő adatokat kell elküldenünk JSON formátumban:

```json
{
    "name": "valaki",
    "email": "valaki@zold.lan",
    "password": "titok",
    "password_confirmation": "titok"
}
```

## Belépés

Belépéshez a következő adatok szükségesek JSON formátumban:

```json
{
    "email": "valaki@zold.lan",
    "password": "titok"
}
```

## Azonosítás a végpontoknál

Ha szükség van azonosításra egy végponthoz, akkor el kell küldenünk a bejelentkezéskor kapott tokent.

### Új dolgozó felvétele

| Végpont | Metódus |
|-|-|
| /api/employees | POST |

JSON formátumban a dolgozók adatai:

```JSON
{
    "name": "Valaki",
    "citiy": "Valahol",
    "salary": 300
}
```

Például Bearer token:

```txt
Sh0b4ZqyNPqIsI94heEj4JuttnGVfz0HATPaM9dC
```
