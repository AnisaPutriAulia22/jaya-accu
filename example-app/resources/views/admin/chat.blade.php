@extends('layout.master-admin')

@section('title', 'Chat')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>Chat dengan User</h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="chatTable">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Pesan Terakhir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->latestChat->message ?? '-' }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-userid="{{ $user->id }}" data-bs-toggle="modal" data-bs-target="#adminChatModal">
                                    Balas
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<!-- Modal Balas (chat history admin) -->
<div class="modal fade" id="adminChatModal" tabindex="-1" aria-labelledby="adminChatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Chat dengan User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="adminChatMessages" style="max-height: 300px; overflow-y: auto;">
           
                </div>
                <form id="adminChatForm">
                    <div class="input-group mt-3">
                        <input type="hidden" id="adminUserId">
                        <input type="text" class="form-control" id="adminMessageInput" placeholder="Ketik balasan..." required>
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {

    // Klik tombol Balas → isi user_id dan load history
    $(document).on('click', '[data-userid]', function () {
        let userId = $(this).data('userid');
        console.log('Balas ke user_id:', userId);

        $('#adminUserId').val(userId);
        loadChatHistory(userId);
    });

    // Submit balasan admin
    $('#adminChatForm').submit(function (e) {
        e.preventDefault();

        let message = $('#adminMessageInput').val();
        let userId = $('#adminUserId').val();

        if (!userId) {
            alert('User ID tidak ditemukan');
            return;
        }

        $.post('/admin/send-message', {
            message: message,
            user_id: userId,
            _token: '{{ csrf_token() }}'
        }, function (response) {
            if (response.success) {
                $('#adminMessageInput').val('');
                loadChatHistory(userId);
            }
        });
    });

    // Fungsi load history chat user
    function loadChatHistory(userId) {
        $.get('/admin/chat-history/' + userId, function (data) {
            let messagesHtml = '';

            data.forEach(function (chat) {
                if (chat.sender === 'admin') {
                    messagesHtml += `<div class="text-end mb-2"><span class="badge bg-primary">${chat.message}</span></div>`;
                } else {
                    messagesHtml += `<div class="text-start mb-2"><span class="badge bg-secondary">${chat.message}</span></div>`;
                }
            });

            $('#adminChatMessages').html(messagesHtml);
            $('#adminChatMessages').scrollTop($('#adminChatMessages')[0].scrollHeight);
        });
    }

});
</script>

@endsection


