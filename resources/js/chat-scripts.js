let currentChannel = null; // To keep track of the current subscription

function fetchMessages(userId) {
    axios.get(`/fetchMessages/${userId}`)
        .then(response => {
            const messages = response.data;
            console.log(messages);
            displayMessages(messages);
            subscribeToChannel(userId); // Subscribe to the channel for real-time updates
        })
        .catch(error => {
            console.error(error);
        });
}

function displayMessages(messages) {
    const messagesDiv = document.getElementById('messages');
    messagesDiv.innerHTML = ''; // Clear previous messages
    messages.forEach(message => {
        addMessageToUI(message); // Add each message to the UI
    });
}

function subscribeToChannel(receiverId) {
    if (currentChannel) {
        currentChannel.stopListening('.message.sent'); // Unsubscribe from the previous channel
    }
    currentChannel = window.Echo.private('chat.' + receiverId)
        .listen('.message.sent', (e) => {
            const message = e.message;
            addMessageToUI(message); // Add new message to the UI
        });
}

window.onUserClick = function (userId) {
    fetchMessages(userId); // Fetch and display messages when a user is clicked
}

window.sendMessage = function () {
    const messageInput = document.getElementById('messageInput');
    const message = messageInput.value;
    const receiverId = document.getElementById('middle').dataset.selectedUserId;
    axios.post('/sendMessage', { message, receiver_id: receiverId })
        .then(response => {
            const sentMessage = response.data.message;
            messageInput.value = ''; // Clear the input after sending
            addMessageToUI(sentMessage); // Optionally add the sent message immediately
        })
        .catch(error => console.error(error));
}

function addMessageToUI(message) {
    const messagesDiv = document.getElementById('messages');

    // Change the sender ID check according to the actual authenticated user ID
    const isSender = message.sender.id === parseInt(document.getElementById('middle').dataset.authUserId);

    const messageElement = `
        <div class="chats ${isSender ? 'chats-right' : 'chats-left'}">
            ${isSender ? '' : `
            <div class="chat-avatar">
                <img src="${message.sender.avatar}" class="rounded-circle dreams_chat" alt="avatar">
            </div>
            `}
            <div class="chat-content">
                <div class="chat-profile-name ${isSender ? 'text-end' : ''}">
                    <h6>${isSender ? `<i class="bx bx-check-double me-1 inactive-check"></i>` : ''}
                        ${message.sender.name}<span>${formatTime(message.timestamp)}</span>
                    </h6>
                </div>
                <div class="message-content">
                    ${message.message}
                </div>
            </div>
            ${isSender ? `
            <div class="chat-avatar">
                <img src="${message.sender.avatar}" class="rounded-circle dreams_chat" alt="avatar">
            </div>
            ` : ''}
        </div>`;

    messagesDiv.insertAdjacentHTML('beforeend', messageElement);
    messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scroll to the bottom on new message
}

function formatTime(timestamp) {
    const date = new Date(timestamp);
    return date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
}
