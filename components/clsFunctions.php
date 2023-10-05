<?php

class clsFunctions
{

    public static function procitajSlikeIzFoldera($folder)
    {
        $slike = array();
        $putanjaDoFoldera = __DIR__ . '/../' . $folder; // Prilagodite putanju ako je potrebno

        // Provera da li je folder validan
        if (is_dir($putanjaDoFoldera)) {
            $datoteke = scandir($putanjaDoFoldera); // Učitava sve datoteke iz foldera

            // Iteracija kroz sve datoteke
            foreach ($datoteke as $datoteka) {
                $putanjaDoDatoteke = $putanjaDoFoldera . '/' . $datoteka;

                // Provera da li je datoteka slika
                if (is_file($putanjaDoDatoteke) && preg_match("/\.(jpg|jpeg|png|gif)$/", $datoteka)) {
                    $nazivSlike = pathinfo($datoteka, PATHINFO_FILENAME);

                    $slike[] = [
                        'path'    => 'images/reference/' . $datoteka,
                        'title'   => $nazivSlike,
                    ];

                }
            }
        }

        return $slike;
    }
}