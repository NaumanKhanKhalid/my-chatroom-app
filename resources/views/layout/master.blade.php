<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Template Content">
    <meta name="keywords" content="Template Keywords">
    <meta name="author" content="Dreamguys - DreamsChat">
    <title>DreamsChat</title>

    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/swiper/swiper.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/boxicons/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="main-wrapper">

        @yield('content')

        <div class="modal fade " id="new-chat">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            New Chat
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="user-block-group mb-4">
                                <div class="search_chat has-search">
                                    <span class="fas fa-search form-control-feedback"></span>
                                    <input class="form-control chat_input" id="search-contacted" type="text"
                                        placeholder="Search">
                                </div>
                                <h5>Contacts</h5>
                                <div class="sidebar sroll-side-view">
                                    <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                        <div class="fav-title contact-title">
                                            <h6>A</h6>
                                        </div>
                                    </div>
                                    <ul class="user-list">
                                        <li class="user-list-item">
                                            <div class="list-user-blk">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/avatar/avatar-4.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                                <div class="users-list-body">
                                                    <div>
                                                        <h5>Alexander Manuel</h5>
                                                        <p>Active 4Min Ago</p>
                                                    </div>
                                                </div>
                                                <div class="notify-check parti-notify-radio">
                                                    <div
                                                        class="form-check d-flex align-items-center justify-content-start ps-0">
                                                        <label class="group-type-radio">
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="user-list-item">
                                            <div class="list-user-blk">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/avatar/avatar-5.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                                <div class="users-list-body">
                                                    <div>
                                                        <h5>Annette Theriot</h5>
                                                        <p>Online</p>
                                                    </div>
                                                </div>
                                                <div class="notify-check parti-notify-radio">
                                                    <div
                                                        class="form-check d-flex align-items-center justify-content-start ps-0">
                                                        <label class="group-type-radio">
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                        <div class="fav-title contact-title">
                                            <h6>B</h6>
                                        </div>
                                    </div>
                                    <ul class="user-list">
                                        <li class="user-list-item">
                                            <div class="list-user-blk">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/avatar/avatar-10.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                                <div class="users-list-body">
                                                    <div>
                                                        <h5>Bacon Mark</h5>
                                                        <p>Active 8Min Ago</p>
                                                    </div>
                                                </div>
                                                <div class="notify-check parti-notify-radio">
                                                    <div
                                                        class="form-check d-flex align-items-center justify-content-start ps-0">
                                                        <label class="group-type-radio">
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="user-list-item">
                                            <div class="list-user-blk">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/avatar/avatar-12.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                                <div class="users-list-body">
                                                    <div>
                                                        <h5>Bennett Gerard</h5>
                                                        <p>Last Seen Today at 12:35 AM</p>
                                                    </div>
                                                </div>
                                                <div class="notify-check parti-notify-radio">
                                                    <div
                                                        class="form-check d-flex align-items-center justify-content-start ps-0">
                                                        <label class="group-type-radio">
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mute-chat-btn">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="feather-x me-1"></i>Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <img src="{{ asset('assets/img/icon/send.svg') }}" class="me-1"
                                        alt="image">Chat
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="new-group">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            New Group
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="new-group-add show-group-add">
                                <div class="user-profiles-group mb-4">
                                    <div class="profile-cover text-center">
                                        <label class="profile-cover-avatar" for="avatar_upload">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/img/avatar/avatar-2.jpg') }}"
                                                alt="Profile Image">
                                            <input type="file" id="avatar_upload">
                                            <span class="avatar-edit">
                                                <img src="{{ asset('assets/img/icon/camera.svg') }}" alt="Image">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="pass-login">
                                        <label class="form-label">Group Name </label>
                                        <input type="password" class="form-control pass-input">
                                    </div>
                                    <div class="pass-login">
                                        <label class="form-label">Description </label>
                                        <textarea class="form-control "></textarea>
                                    </div>
                                    <div class="pass-login">
                                        <h4>Group Type</h4>
                                        <div class="d-flex align-items-center">
                                            <label class="group-type-radio">Public
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="group-type-radio">Private
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mute-chat-btn">
                                    <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="feather-x me-1"></i>Cancel
                                    </a>
                                    <a class="btn btn-primary" id="next-parti">
                                        <i class="feather-arrow-right me-1"></i>Next
                                    </a>
                                </div>
                            </div>
                            <div class="parti-group hash-participant">
                                <div class="user-block-group mb-4">
                                    <div class="search_chat has-search group-name-search">
                                        <span class="fas fa-search form-control-feedback"></span>
                                        <input class="form-control chat_input" id="search-contact-one" type="text"
                                            placeholder="Search">
                                    </div>
                                    <h5>Contacts</h5>
                                    <div class="sidebar">
                                        <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                            <div class="fav-title contact-title">
                                                <h6>A</h6>
                                            </div>
                                        </div>
                                        <ul class="user-list">
                                            <li class="user-list-item">
                                                <div class="list-user-blk">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatar/avatar-4.jpg') }}"
                                                            class="rounded-circle" alt="image">
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div>
                                                            <h5>Alexander Manuel</h5>
                                                            <p>Active 4Min Ago</p>
                                                        </div>
                                                    </div>
                                                    <div class="notify-check parti-notify-check">
                                                        <div
                                                            class="form-check d-flex align-items-center justify-content-start ps-0">
                                                            <label class="custom-check mt-0 mb-0">
                                                                <input type="checkbox" name="remeber">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="list-user-blk">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatar/avatar-5.jpg') }}"
                                                            class="rounded-circle" alt="image">
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div>
                                                            <h5>Annette Theriot</h5>
                                                            <p>Online</p>
                                                        </div>
                                                    </div>
                                                    <div class="notify-check parti-notify-check">
                                                        <div
                                                            class="form-check d-flex align-items-center justify-content-start ps-0">
                                                            <label class="custom-check mt-0 mb-0">
                                                                <input type="checkbox" name="remeber">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                            <div class="fav-title contact-title">
                                                <h6>B</h6>
                                            </div>
                                        </div>
                                        <ul class="user-list">
                                            <li class="user-list-item">
                                                <div class="list-user-blk">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatar/avatar-4.jpg') }}"
                                                            class="rounded-circle" alt="image">
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div>
                                                            <h5>Bacon Mark</h5>
                                                            <p>Active 8Min Ago</p>
                                                        </div>
                                                    </div>
                                                    <div class="notify-check parti-notify-check">
                                                        <div
                                                            class="form-check d-flex align-items-center justify-content-start ps-0">
                                                            <label class="custom-check mt-0 mb-0">
                                                                <input type="checkbox" name="remeber">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item ">
                                                <div class="list-user-blk mb-0">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatar/avatar-5.jpg') }}"
                                                            class="rounded-circle" alt="image">
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div>
                                                            <h5>Bennett Gerard</h5>
                                                            <p>Last Seen Today at 12:35 AM</p>
                                                        </div>
                                                    </div>
                                                    <div class="notify-check parti-notify-check">
                                                        <div
                                                            class="form-check d-flex align-items-center justify-content-start ps-0">
                                                            <label class="custom-check mt-0 mb-0">
                                                                <input type="checkbox" name="remeber" checked>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mute-chat-btn">
                                    <a class="btn btn-secondary" id="previous-group">
                                        <i class="bx bx-left-arrow-alt me-1"></i>Previous
                                    </a>
                                    <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close"
                                        data-bs-toggle="modal" data-bs-target="#Success-group">
                                        <i class="bx bx-send me-1"></i>Create
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="Success-group">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content success-group-wrap-list">
                    <div class="modal-header">
                        <div class="success-pass mx-auto">
                            <img src="{{ asset('assets/img/avatar/avatar-16.png') }}" alt="Success"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="success-header">
                            <h4>Success</h4>
                            <p>Group Created Successfully</p>
                        </div>
                        <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                            Ok
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="invite-other">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Invite Friends
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="user-profiles-group mb-4">
                                <div class="pass-login">
                                    <label class="form-label">Email Address or Phone Number</label>
                                    <input type="password" class="form-control pass-input">
                                </div>
                                <div class="pass-login">
                                    <label class="form-label">Invitation Message </label>
                                    <textarea class="form-control "></textarea>
                                </div>
                            </div>
                            <div class="mute-chat-btn">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="feather-x me-1"></i>Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="bx bx-send me-1"></i>Send Invitation
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade mute-notify" id="mute-notification">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Mute Notifications
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="notify-check">
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">30 Minutes
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Hour
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Day
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Week
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Month
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">1 Year
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                    <label class="group-type-radio">Always
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="mute-chat-btn">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Mute
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="change-chat">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Delete Chat
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-icons">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="block-user-blk text-center">
                            <i class="bx bx-trash change-color "></i>
                            <p>Clearing or deleting entire chats will only remove messages from this device and your
                                devices on the newer versions of DreamsChat.</p>
                        </div>
                        <div class="mute-chat-btn justify-content-center">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/plugins/swiper/swiper.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/rocket-loader.min.js') }}" data-cf-settings="c5a6c2343833b33a9bd57a9d-|49" defer>
    </script>
    @stack('scripts')
</body>

</html>
