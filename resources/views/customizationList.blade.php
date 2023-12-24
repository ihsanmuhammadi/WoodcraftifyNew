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
        <main role="main" class="col-md-12 main-content">
            <h1 class="ml-4 mt-2 fs-3 fw-bold" style="color: var(--csk-776-a-3-c-800, #443D22);">Customization List</h1>
            <div class="card ml-4 mt-3 mr-5" style="border: 2px solid var(--csk-776-a-3-c-600, #887944);">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Date</th>
                            <th class="text-center" scope="col">Time</th>
                            <th class="text-center" scope="col">Details</th>
                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td class="text-center pt-3">1</td>
                            <td class="text-center pt-3">Mark</td>
                            <td class="text-center pt-3">Otto</td>
                            <td class="text-center pt-3">@mdo</td>
                            <td class="text-center pt-3">Details content</td>
                            <td class="text-center">
                                <button class="btn btn-customization toggleActions" data-target="actionsContent1">Actions</button>
                                <button class="btn btn-customization">Edit</button>
                            </td>
                        </tr>
                        <tr id="actionsContent1" class="hidden-content" style="display: none;">
                            <td colspan="6">
                                <div class="progress mx-4 my-2" role="progressbar" aria-label="Example 20px high" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                    <div class="progress-bar" style="width: 100%; background:#443D22"></div>
                                  </div>
                                <span style="display: inline-block; margin-left:145px;">Reference</span>
                                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                                <span id="prototypeButton" class="toogleActions btn" style="display: inline-block; margin-left:60px; margin-right: 10px;">Prototype</span>
                                <span style="display: inline-block; margin-left:110px">Deal</span>
                            </td>
                        </tr>
                        <tr id="discussContent" class="hidden-content" style="display: none;">
                            <td colspan="6">
                                <div class="card mx-4 my-4" style="border-radius: 12px; background: var(--csk-776-a-3-c-200, #DDD6BB);">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h1 class="my-4 ml-5">Contact Woodcraftify Here!</h1>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <button class="btn btn-customization my-3 mr-4">Line</button>
                                            <button class="btn btn-customization my-3 mr-4">Telegram</button>
                                            <button class="btn btn-customization my-3 mr-4">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr id="prototypeContent" class="hidden-content" style="display: none;">
                            <td colspan="6">
                                <div class="card mx-4 my-4" style="border-radius: 12px; background: var(--csk-776-a-3-c-200, #DDD6BB);">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h1 class="my-4 ml-5">ini prototype</h1>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <h1>ini prototype juga</h1>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<script>
    // Wait for the document to be fully loaded
    document.addEventListener('DOMContentLoaded', function () {
        // Get all elements with the class "toggleActions"
        var toggleActionsButtons = document.querySelectorAll('.toggleActions');

        // Attach a click event listener to each "Toggle Actions" button
        toggleActionsButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Toggle the visibility of the corresponding content
                var targetId = button.getAttribute('data-target');
                var actionsContent = document.getElementById(targetId);
                actionsContent.style.display = actionsContent.style.display === 'none' ? 'table-row' : 'none';
            });
        });
    });
    document.addEventListener('DOMContentLoaded', function () {
        // Get the "Discuss" button
        var discussButton = document.getElementById('discussButton');

        // Get the content to be toggled for "Discuss"
        var discussContent = document.getElementById('discussContent');

        // Attach a click event listener to the "Discuss" button
        discussButton.addEventListener('click', function () {
            // Toggle the visibility of the content for "Discuss"
            discussContent.style.display = discussContent.style.display === 'none' ? 'table-row' : 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function () {
        // Get the "Discuss" button
        var prototypeButton = document.getElementById('prototypeButton');

        // Get the content to be toggled for "Discuss"
        var prototypeContent = document.getElementById('prototypeContent');

        // Attach a click event listener to the "Discuss" button
        prototypeButton.addEventListener('click', function () {
            // Toggle the visibility of the content for "Discuss"
            prototypeContent.style.display = prototypeContent.style.display === 'none' ? 'table-row' : 'none';
        });
    });
</script>
@endsection
