<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class BookImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            'title'  => $row['title'],
            'imgpath'  => $row['imgpath'],
            'date_released'  => $row['date_released'],
            'nums'  => $row['nums'],
            'genre_id'  => $row['genre_id'],
            'author_id'  => $row['author_id'],

        ]);
    }
}
