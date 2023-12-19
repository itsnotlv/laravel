
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    public function index()
    {
        // Voer een SELECT-query uit op de 'planets' tabel
        $planets = DB::table('planets')->get();

        // Retourneer de resultaten naar een view
        return view('planets.index', ['planets' => $planets]);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planets</h1>

    <ul>
        @foreach($planets as $planet)
            <li>{{ $planet->name }}</li>
        @endforeach
    </ul>
</body>
</html>
