<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SeederController extends Controller
{
    public function seed(Request $request)
    {
        try {
            Artisan::call('migrate:fresh --seed');

            return response()->json([
                'success' => true,
                'message' => 'Database seeding completed successfully.'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Database seeding failed: ' . $e->getMessage()
            ], 500);
        }
    }
}
