document.addEventListener('DOMContentLoaded', function() {
    // Handler para mudança de status dos usuários
    const statusSelects = document.querySelectorAll('select[class*="bg-green-100"], select[class*="bg-red-100"]');
    
    statusSelects.forEach(select => {
        select.addEventListener('change', function() {
            const userId = this.closest('tr').querySelector('td:first-child input[type="checkbox"]').value || 
                          this.closest('tr').querySelector('td:nth-child(2)').textContent.replace('#', '').trim();
            
            const newStatus = this.value;
            
            // Atualiza o status via AJAX
            fetch(`/admin/users/${userId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    status: newStatus,
                    _method: 'PUT'
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Atualiza a aparência visual
                    this.className = newStatus === 'active' 
                        ? 'inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium border-0 outline-none cursor-pointer bg-green-100 text-green-700'
                        : 'inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium border-0 outline-none cursor-pointer bg-red-100 text-red-700';
                    
                    // Mostra notificação de sucesso
                    showNotification('Status atualizado com sucesso!', 'success');
                } else {
                    showNotification('Erro ao atualizar status', 'error');
                    // Reverte a seleção
                    this.value = newStatus === 'active' ? 'inactive' : 'active';
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                showNotification('Erro ao atualizar status', 'error');
                // Reverte a seleção
                this.value = newStatus === 'active' ? 'inactive' : 'active';
            });
        });
    });
});

function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `fixed bottom-4 right-4 px-6 py-3 rounded-lg shadow-lg z-50 flex items-center gap-2 animate-slide-in ${
        type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
    }`;
    
    notification.innerHTML = `
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="${
                type === 'success' ? 'M5 13l4 4L19 7' : 'M6 18L18 6M6 6l12 12'
            }"></path>
        </svg>
        <span>${message}</span>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}