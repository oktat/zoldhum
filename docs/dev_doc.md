# Fejlesztői dokumentáció

## Bevezetés

Ez egy REST API, ami Laravel Framework 8.79.0 verzióval készült. Dolgozók és pozíciójuk nyilvantartására használható.

## Továbbfejlesztés

```bash
git clone https://github.com/oktat/zoldhum.git
cd zoldhum
composer install
npm install
```

## Használt keretrendszer

Az API a Laravel PHP keretrendszerrel készült.

## Routing

A routing a routes/api.php fájlban van beállítva, így minden végpont az /api/ alkönyvtárból érhető el.

A routingban van beállítva csoportosan a sanctum azonosítás, a post, put és delete metódussal megadott végpontok számára.

A position végpont számára nincs külön beállítva semmi, a Route::apiResource() metódus biztosítja a metódusokat.

Az app/Http/Controllers/EmployeeController osztály írja le az employees végpontra való reakciókat.

## Táblák

### Az employees tábla

```php
Schema::create('employees', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('city');
    $table->decimal('salary', 5, 2);
    $table->integer('positionId')->nullable();
    $table->timestamps();
});
```

### A positions tábla

```php
Schema::create('positions', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->timestamps();
});
```

## Kontrollerek

### EmployeeController

Az EmployeeController kezeli az employee táblát.

| Metódusok | Leírás |
|-|-|
| index() | dolgozók megjelenítése |
| store() | új dolgozók megjelenítése |
| update() | dolgozó adatainak frissítése |
| destroy() | dolgozó törlése |

### PositionController

Az PositionController kezeli az position táblát.

| Metódusok | Leírás |
|-|-|
| index() | pozíció megjelenítése |
| store() | új pozíció megjelenítése |
| update() | pozíció adatainak frissítése |
| destroy() | pozíció törlése |

### AuthController

Az AuthController kezeli a felhasználó felvételét, beléptetését és a kiléptetést.

| Metódusok | Leírás |
|-|-|
| register() | felhasználó felvétel |
| login() | felhasználó beléptetése |
| logout() | felhasználó kiléptetése |
