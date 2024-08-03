<div class="chat chat-messages" id="middle" data-selected-user-id="{{ $user->id }}">
    <div>
        <div class="chat-header">
            <div class="user-details">
                <div class="d-lg-none">
                    <ul class="list-inline mt-2 me-2">
                        <li class="list-inline-item">
                            <a class="text-muted px-0 left_sides" href="#" data-chat="open">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <figure class="avatar ms-1">
                    <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle" alt="image">
                </figure>
                <div class="mt-1">
                    <h5>{{ $user->name}}</h5>
                    <small class="last-seen">
                        Last Seen at 07:15 PM
                    </small>
                </div>
            </div>
            <div class="chat-options ">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="javascript:void(0)" class="btn btn-outline-light chat-search-btn"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
                            <i class="bx bx-search"></i>
                        </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Video Call">
                        <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                            data-bs-target="#video_call">
                            <i class="bx bx-video"></i>
                        </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Voice Call">
                        <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                            data-bs-target="#voice_call">
                            <i class="bx bx-phone"></i>
                        </a>
                    </li>
                    <li class="list-inline-item dream_profile_menu">
                        <a href="javascript:void(0)" class="btn btn-outline-light not-chat-user"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Contact Info">
                            <i class="bx bx-info-circle"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light no-bg" href="#" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="index.html" class="dropdown-item "><span><i class="bx bx-x"></i></span>Close Chat
                            </a>
                            <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#mute-notification"><span><i class="bx bx-volume-mute"></i></span>Mute
                                Notification</a>
                            <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#disappearing-messages"><span><i
                                        class="bx bx-time-five"></i></span>Disappearing Message</a>
                            <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#clear-chat"><span><i class="bx bx-brush-alt"></i></span>Clear
                                Message</a>
                            <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#change-chat"><span><i class="bx bx-trash"></i></span>Delete
                                Chat</a>
                            <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#report-user"><span><i class="bx bx-dislike"></i></span>Report</a>
                            <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#block-user"><span><i class="bx bx-block"></i></span>Block</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="chat-search">
                <form>
                    <span class="form-control-feedback"><i class="bx bx-search"></i></span>
                    <input type="text" name="chat-search" placeholder="Search Chats" class="form-control">
                    <div class="close-btn-chat"><span class="material-icons">close</span></div>
                </form>
            </div>

        </div>
        <div class="chat-body chat-page-group slimscroll">
            <div class="messages" id="messages">
                @foreach ($messages as $message)
                    @php
                        $isSender = $message->sender->id == Auth::user()->id;
                    @endphp
                    <div class="chats {{ $isSender ? '' : 'chats-right' }}">
                        @if(!$isSender)
                            <div class="chat-avatar">
                                <img src="{{ $message->sender->avatar }}" class="rounded-circle dreams_chat" alt="avatar">
                            </div>
                        @endif
                        <div class="chat-content">
                            <div class="chat-profile-name {{ $isSender ? 'text-end' : '' }}">
                                <h6>
                                    @if($isSender)
                                        <i class="bx bx-check-double me-1 inactive-check"></i>
                                    @endif
                                    {{ $message->sender->name }}
                                    <span>{{ \Carbon\Carbon::parse($message->timestamp)->format('g:i A') }}</span>
                                </h6>
                                <div class="chat-action-btns ms-2">
                                    <div class="chat-action-col">
                                        <a href="#" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item message-info-left">
                                                <span><i class="bx bx-info-circle"></i></span>Message Info
                                            </a>
                                            <a href="#" class="dropdown-item reply-button">
                                                <span><i class="bx bx-share"></i></span>Reply
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <span><i class="bx bx-smile"></i></span>React
                                            </a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#forward-message">
                                                <span><i class="bx bx-reply"></i></span>Forward
                                            </a>
                                            <a href="#" class="dropdown-item click-star">
                                                <span><i class="bx bx-star"></i></span><span class="star-msg">Star Message</span>
                                            </a>
                                            @if($isSender)
                                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-message">
                                                    <span><i class="bx bx-edit-alt"></i></span>Edit
                                                </a>
                                            @endif
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-message">
                                                <span><i class="bx bx-trash"></i></span>Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-content">
                                {{ $message->message }}
                                <div class="emoj-group {{ $isSender ? 'rig-emoji-group' : '' }}">
                                    <ul>
                                        <li class="emoj-action">
                                            <a href="javascript:;"><i class="bx bx-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-01.svg" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-02.svg" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-03.svg" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-04.svg" alt="Icon"></a></li>
                                                    <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-05.svg" alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:;"><i class="feather-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="bx bx-share"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @if($isSender)
                            <div class="chat-avatar">
                                <img src="{{ $message->sender->avatar }}" class="rounded-circle dreams_chat" alt="avatar">
                            </div>
                        @endif
                    </div>
                @endforeach

                <div class="chat-line">
                    <span class="chat-date">Today, {{ \Carbon\Carbon::now()->format('F j') }}</span>
                </div>
            </div>

        </div>
    </div>
    <div class="chat-footer">
        <form>
            <div class="smile-foot">
                <div class="chat-action-btns">
                    <div class="chat-action-col">
                        <a class="action-circle" href="#" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item "><span><i
                                        class="bx bx-file"></i></span>Document</a>
                            <a href="#" class="dropdown-item"><span><i
                                        class="bx bx-camera"></i></span>Camera</a>
                            <a href="#" class="dropdown-item"><span><i
                                        class="bx bx-image"></i></span>Gallery</a>
                            <a href="#" class="dropdown-item"><span><i
                                        class="bx bx-volume-full"></i></span>Audio</a>
                            <a href="#" class="dropdown-item"><span><i
                                        class="bx bx-map"></i></span>Location</a>
                            <a href="#" class="dropdown-item"><span><i
                                        class="bx bx-user-pin"></i></span>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="smile-foot emoj-action-foot">
                <a href="#" class="action-circle"><i class="bx bx-smile"></i></a>
                <div class="emoj-group-list-foot down-emoji-circle">
                    <ul>
                        <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-01.svg" alt="Icon"></a>
                        </li>
                        <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-02.svg" alt="Icon"></a>
                        </li>
                        <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-03.svg" alt="Icon"></a>
                        </li>
                        <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-04.svg" alt="Icon"></a>
                        </li>
                        <li><a href="javascript:;"><img src="assets/img/icon/emoj-icon-05.svg" alt="Icon"></a>
                        </li>
                        <li class="add-emoj"><a href="javascript:;"><i class="feather-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="smile-foot">
                <a href="#" class="action-circle"><i class="bx bx-microphone-off"></i></a>
            </div>
            <div class="replay-forms">
                <div class="chats forward-chat-msg reply-div d-none">
                    <div class="contact-close_call text-end">
                        <a href="#" class="close-replay">
                            <i class="bx bx-x"></i>
                        </a>
                    </div>
                    <div class="chat-avatar">
                        <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
                    </div>
                    <div class="chat-content">
                        <div class="chat-profile-name">
                            <h6>Mark Villiams<span>8:16 PM</span></h6>
                            <div class="chat-action-btns ms-2">
                                <div class="chat-action-col">
                                    <a class="#" href="#" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item message-info-left"><span><i
                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                        <a href="#" class="dropdown-item reply-button"><span><i
                                                    class="bx bx-share"></i></span>Reply</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-smile"></i></span>React</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#forward-message"><span><i
                                                    class="bx bx-reply"></i></span>Forward</a>
                                        <a href="#" class="dropdown-item"><span><i
                                                    class="bx bx-star"></i></span>Star Message</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#report-user"><span><i
                                                    class="bx bx-dislike"></i></span>Report</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#delete-message"><span><i
                                                    class="bx bx-trash"></i></span>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="message-content reply-content">
                        </div>
                    </div>
                </div>
                <input type="text" id="messageInput" class="form-control chat_form"
                    placeholder="Type your message here...">
            </div>
            <div class="form-buttons">
                <button onclick="sendMessage()" class="btn send-btn" type="button">
                    <i class="bx bx-paper-plane"></i>
                </button>
            </div>
        </form>
    </div>
</div>
