@extends('layouts.main_book')

@section('book-content')
    <div class="container">
        {{-- Iterate Book --}}
        @foreach ($books as $book)
            {{-- Variables --}}
            @php
                $id = (string) $book['id'];
                $title = $book['title'];
                $slug = $book['slug'];
            @endphp
            {{-- Book View --}}
            <article>
                <a href="/books/{{ $slug }}">
                    <h2>{{ $title }}</h2>
                </a>
                <div class="d-flex align-item-center flex-column justify-content-center">
                    <div>{!! DNS1D::getBarcodeHTML($id, 'UPCA') !!}</div>
                    <p>{{ $id }}</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#bookModal{{ $id }}">
                        Lihat Detail
                    </button>
                </div>
            </article>
            {{-- Modal --}}
            <div class="modal fade" id="bookModal{{ $id }}" tabindex="-1"
                aria-labelledby="bookModalLabel{{ $id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="bookModalLabel{{ $id }}">Detail Book</h1>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <article>
                                <a href="/books/{{ $slug }}">
                                    <h2>{{ $title }}</h2>
                                </a>
                                <div class="d-flex align-item-center flex-column justify-content-center">
                                    <div>{!! DNS1D::getBarcodeHTML($id, 'UPCA') !!}</div>
                                    <p>{{ $id }}</p>
                                    <a href="/books/{{ $slug }}">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#bookModal{{ $id }}">
                                            Lihat Detail
                                        </button>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="/books/print/{{ $slug }}">
                                <button type="button" class="btn btn-primary">Print</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
