// Listen for new messages using Laravel Echo
window.Echo.channel('chatroom')
    .listen('.message.sent', (e) => {
        const messages = document.getElementById('messages');
        const messageElement = document.createElement('div');
        messageElement.className = 'message';
        messageElement.innerHTML = `<p>${e.message}</p><div class="timestamp">${new Date().toLocaleTimeString()}</div>`;
        messages.appendChild(messageElement);
        messages.scrollTop = messages.scrollHeight;
    });

// Function to send a new message
window.sendMessage = function() {
    const messageInput = document.getElementById('messageInput');
    const message = messageInput.value;
    axios.post('/chat/send-message', { message: message })
        .then(response => {
            console.log(response.data);
            messageInput.value = '';
        })
        .catch(error => console.error(error));
}
