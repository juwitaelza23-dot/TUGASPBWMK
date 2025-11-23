<?php
$router->post('/lumenjuwita', function (Illuminate\Http\Request $request) {
    $jari = $request->input('jari');

    $luas = 3.14 * $jari * $jari;

    return response()->json([
        'Luas Lingkaran' => $luas
    ]);
});
