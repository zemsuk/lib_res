<?php
namespace Zems\LibRes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibResController extends Controller
{   
    public function index($data = false)
    {
        return "Zems Restaurant Library demo";
    }    
}
