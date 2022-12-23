<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    public function __invoke(Request $request): string
    {
        return 'Hello Book';
    }

    public function books(): View
    {
        $books = [
            [
                'id' => random_int(10_000, 10_000_000),
                'title' => 'JavaScript Clever',
                'slug' => 'javascript-clever',
                'price' => 1.23,
                'author' => 'Brad'
            ],
            [
                'id' => random_int(10_000, 10_000_000),
                'title' => 'Dart Most Wanted',
                'slug' => 'dart-most-wanted',
                'price' => 1.23,
                'author' => 'Brad'
            ]
        ];

        $data = [
            'title' => 'Books',
            'books' => $books,
        ];

        return view('books.books', $data);
    }

    public function book(Request $request): View
    {
        $slug = $request->slug;
        $book = $this->getBookBySlug($slug);

        $data = [
            'title' => $slug,
            'book' => $book,
        ];

        return view('books.book', $data);
    }

    private function getBookBySlug(string $slug): array
    {
        $books = [
            [
                'id' => random_int(10_000, 10_000_000),
                'title' => 'JavaScript Clever',
                'slug' => 'javascript-clever',
                'price' => 1.23,
                'author' => 'Brad'
            ],
            [
                'id' => random_int(10_000, 10_000_000),
                'title' => 'Dart Most Wanted',
                'slug' => 'dart-most-wanted',
                'price' => 1.23,
                'author' => 'Brad'
            ]
        ];

        // array search
        $bookIndex = array_search($slug, array_column($books, 'slug'));
        return $books[$bookIndex];
    }

    public function bookPdf(Request $request)
    {

        // Start From
        // $start = 1;
        // $end = 25;

        // $product = [
        //     'lot' => 'PEX' . random_int(10_000, 10_000_000),
        //     'of' => 50,
        // ];

        // $products = [];

        // for ($i = $start; $i <= $end; $i++) {
        //     $product['start'] = $i;
        //     $products [] = $product;
        // }

        // for ($i = 0; $i < count($products); $i++) {
        //     $product = $products[$i];
        //     echo 'Start ' . $product['start'] . ' ' . $product['lot'] . ' OF ' . $product['of'] . PHP_EOL;
        // }

        $slug = $request->slug;

        $book = $this->getBookBySlug($slug);

        $data = [
            'title' => $book['slug'],
            'book' => $book,
        ];

        // print
        return Pdf::loadView('books.book_pdf', $data)->stream();

        // return $pdf->download('book.pdf');
    }
}
