<?php
namespace App\Http\Controllers;

class ArticelsController extends Controller{
    public function artikel($id){
                return "Halaman Artikel dengan ID ". $id;
            }
}
?>