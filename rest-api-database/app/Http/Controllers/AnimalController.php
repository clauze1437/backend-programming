<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    # Property Animals
    public $animals = ['kucing', 'ayam', 'ikan'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // untuk menampilkan keseluruhan data menggunakan forearch
        foreach ($this->animals as $animal) {
            echo "- $animal <br>";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "Menambahkan data animals (Musang) : <br>";
        // untuk menambahkan data animals menggunaka  array_push
        array_push($this->animals, $request->nama);

        $this->index();


        # echo "Nama Hewan: $request->nama" . PHP_EOL;
        # echo "Nama Hewan: $request->nama";
        # echo "<br>";
        # echo "Menambahkan hewan baru";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Animal  $animal
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo "Mengupdate data animals (Burung, 1) : <br>";
        // untuk mengupdate data animals
        $this->animals[$id] = $request->nama;

        $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "Menghapus data animals (2 = ikan) : <br>";
        // untuk menghapus data animals menggunakan unset
        unset($this->animals[$id], $index);

        $this->index();


        # echo "Menghapus data animals - id $id";
    }
}
