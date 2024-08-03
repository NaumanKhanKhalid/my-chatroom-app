@extends('layout.master')

@section('content')
    <div class="content main_content">
        @include('components.sidebar', ['users' => $users])
        <div class="chat status-middle-bar d-flex align-items-center justify-content-center" id="chat-area">
            <!-- This will be populated via JavaScript -->
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var selectedUserInChat = localStorage.getItem('selectedUserInChat');

            if (selectedUserInChat) {
                loadChat(selectedUserInChat);
            } else {
                $('#chat-area').load('{{ route('view.noChat') }}');
            }

            $('.user-chat-link').on('click', function(e) {
                e.preventDefault();
                var userId = $(this).data('user-id');
                localStorage.setItem('selectedUserInChat', userId);
                loadChat(userId);
                onUserClick(userId);
            });

            function loadChat(userId) {
                $.ajax({
                    url: `{{ route('user.chat', ['id' => ':id']) }}`.replace(':id', userId),
                    method: 'GET',
                    success: function(response) {
                        $('#chat-area').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error loading chat:', error);
                        $('#chat-area').html('<p>Unable to load chat. Please try again later.</p>');
                    }
                });
            }
        });
    </script>
@endpush
