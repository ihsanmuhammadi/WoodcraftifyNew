@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-8 sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'fw-bold sidebar-bg' : '' }}">
                        <img src="img/reference.png" alt="Reference Icon" class="sidebar-icon">
                        <a href="{{ route('dashboard') }}" class="ml-2">Reference</a>
                    </li>
                    <li class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'font-weight-bold ' : '' }}">
                        <img src="img/customization.png" alt="Customization Icon" class="sidebar-icon">
                        <a href="{{ route('dashboard') }}" class="ml-2">Customization</a>
                    </li>
                    <li class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'font-weight-bold' : '' }}">
                        <img src="img/transaction.png" alt="Transactions Icon" class="sidebar-icon">
                        <a href="{{ route('dashboard') }}" class="ml-2">Transactions</a>
                    </li>
                    <li class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'font-weight-bold' : '' }}">
                        <img src="img/history.png" alt="History Icon" class="sidebar-icon">
                        <a href="{{ route('dashboard') }}" class="ml-2">History</a>
                    </li>
                    <li class="nav-item d-flex align-items-center side-bottom-text fw-bold">
                        <p>Woodcraftify Copyright @ 2023</p>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <main role="main" class="col-md-12 main-content mb-5">
                <!-- Your content goes here -->
                <button type="button" class="btn btn-reference text-light fs-4 mb-3 mt-3">+ Personal Customization</button>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="card reference-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                        <img src="img/tes card.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <button type="button" class="btn btn-reference-pick text-light fs-6">Start Customization</button>
                        </div>
                    </div>
                    <div class="card reference-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                        <img src="img/tes card.png" class="" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="button" class="btn btn-reference-pick text-light fs-6">Start Customization</button>
                        </div>
                    </div>

                    <div class="card reference-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                        <img src="img/tes card.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="button" class="btn btn-reference-pick text-light fs-6">Start Customization</button>
                        </div>
                    </div>
                    <div class="card reference-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                        <img src="img/tes card.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="button" class="btn btn-reference-pick text-light fs-6">Start Customization</button>
                        </div>
                    </div>
                    <div class="card reference-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                        <img src="img/tes card.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="button" class="btn btn-reference-pick text-light fs-6">Start Customization</button>
                        </div>
                    </div>
                    <div class="card reference-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                        <img src="img/tes card.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="button" class="btn btn-reference-pick text-light fs-6">Start Customization</button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
