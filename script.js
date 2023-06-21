$(document).ready(function(){
    function fetchMessages() {
        $.get('fetch.php', function(data) {
            $('#chatroom').html(data);
            $('#chatroom').scrollTop($('#chatroom')[0].scrollHeight);
        });
    }

    fetchMessages();
    setInterval(fetchMessages, 2000);

    function sendMessage() {
        var message = $('#message').val();
        $.post('send.php', { message: message }, function(){
            fetchMessages();
            $('#message').val('');
        });
    }

    $('#send').click(sendMessage);
    $('#message').keypress(function(e){
        if(e.which == 13) { // Enter key pressed
            sendMessage();
            e.preventDefault(); // Prevent form submission
        }
    });
});