<?php
namespace App\Controllers\Api;

use App\Controllers\Controller;
use App\Models\Currency;

class DataController extends Controller
{
    public function __construct() {
        header('Content-Type: application/json');
    }
    public function index()
    {
        $data = Currency::all();    
        echo json_encode($data);
    }
    public function show($id)
    {

        $data = Currency::find($id);    
        echo json_encode($data);
    }
    
}
