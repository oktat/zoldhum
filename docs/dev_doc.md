# Fejlesztői dokumentáció

## Továbbfejlesztés

```bash
git clone https://github.com/andteki/zoldhum.git
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
