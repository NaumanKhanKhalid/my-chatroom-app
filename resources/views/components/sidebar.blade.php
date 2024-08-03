<div class="sidebar-menu">
    <div class="logo-col">
        <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
    </div>
    <div class="menus-col">
        <div class="chat-menus">
            <ul>
                <li>
                    <a href="index.html" class="chat-unread active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title data-bs-original-title="Chat">
                        <i class="bx bx-message-square-dots"></i>
                    </a>
                </li>
                <li>
                    <a href="group.html" class="chat-unread" data-bs-toggle="tooltip" data-bs-placement="right" title
                        data-bs-original-title="Group">
                        <i class="bx bx-group"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-menus">
            <ul>
                <li>
                    <a href="#" id="dark-mode-toggle" class="dark-mode-toggle active">
                        <i class="bx bx-moon"></i>
                    </a>
                    <a href="#" id="light-mode-toggle" class="dark-mode-toggle">
                        <i class="bx bx-sun"></i>
                    </a>
                </li>
                <li>
                    <div class="avatar avatar-online">
                        <a href="#" class="chat-profile-icon" data-bs-toggle="dropdown">
                            <img src="{{ asset('assets/img/avatar/avatar-2.jpg') }}" alt>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="settings.html" class="dropdown-item"><span><i
                                        class="bx bx-cog"></i></span>Settings</a>
                            <a href="email-login.html" class="dropdown-item"><span><i
                                        class="bx bx-log-out"></i></span>Logout </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="sidebar-group left-sidebar chat_sidebar">

    <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">
        <div class="slimscroll">

            <div class="left-chat-title all-chats d-flex justify-content-between align-items-center">
                <div class="select-group-chat">
                    <div class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown">
                            All Chats<i class="bx bx-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="chat.html">All Chat</a></li>
                        </ul>
                    </div>
                </div>
                <div class="add-section">
                    <ul>
                        <li><a href="javascript:;" class="user-chat-search-btn"><i class="bx bx-search"></i></a>
                        </li>
                        <li>
                            <div class="chat-action-btns">
                                <div class="chat-action-col">
                                    <a class="#" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;" class="dropdown-item " data-bs-toggle="modal"
                                            data-bs-target="#new-chat"><span><i
                                                    class="bx bx-message-rounded-add"></i></span>New Chat
                                        </a>
                                        <a href="javascript:;" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#new-group"><span><i
                                                    class="bx bx-user-circle"></i></span>Create Group</a>
                                        <a href="javascript:;" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#invite-other"><span><i
                                                    class="bx bx-user-plus"></i></span>Invite Others</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="user-chat-search">
                        <form>
                            <span class="form-control-feedback"><i class="bx bx-search"></i></span>
                            <input type="text" name="chat-search" placeholder="Search" class="form-control">
                            <div class="user-close-btn-chat"><span class="material-icons">close</span></div>
                        </form>
                    </div>

                </div>
            </div>


            <div class="top-online-contacts">
                <div class="fav-title">
                    <h6>Online Now</h6>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($users as $user)
                            <div class="swiper-slide">
                                <div class="top-contacts-box">
                                    <div class="profile-img online">
                                        <a href="#" class="user-chat-link" data-user-id="{{ $user->id }}"
                                            title="{{ $user->name }}">
                                            <img src="{{ asset('assets/img/avatar/avatar-2.jpg') }}" alt="Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="sidebar-body chat-body" id="chatsidebar">

                <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                    <div class="fav-title pin-chat">
                        <h6><i class="bx bx-pin me-1"></i>Recent Chats</h6>
                    </div>
                </div>

                <ul class="user-list space-chat">
                    <li class="user-list-item chat-user-list">
                        <a href="chat.html">
                            <div class="avatar avatar-online">
                                <img src="{{ asset('assets/img/avatar/avatar-2.jpg') }}" class="rounded-circle"
                                    alt="image">
                            </div>
                            <div class="users-list-body">
                                <div>
                                    <h5>Mark Villiams</h5>
                                    <p>Have you called them?</p>
                                </div>
                                <div class="last-chat-time">
                                    <small class="text-muted">10:20 PM</small>
                                    <div class="chat-pin">
                                        <i class="bx bx-pin me-2"></i>
                                        <i class="bx bx-check-double"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="chat-hover ms-1">
                            <div class="chat-action-col">
                                <span class="d-flex" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </span>
                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                    <span class="dropdown-item "><span><i class="bx bx-archive-in"></i></span>Archive
                                        Chat </span>
                                    <span class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#mute-notification"><span><i
                                                class="bx bx-volume-mute"></i></span>Mute
                                        Notification</span>
                                    <span class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#change-chat"><span><i class="bx bx-log-out"></i></span>Delete
                                        Chat</span>
                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Unpin
                                        Chat</span>
                                    <span class="dropdown-item"><span><i class="bx bx-check-square"></i></span>Mark as
                                        Unread</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
